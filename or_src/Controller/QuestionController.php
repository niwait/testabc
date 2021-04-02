<?php

namespace App\Controller;

use App\Form\AnswerForm;
use App\Form\QuestionForm;
use App\Model\Entity\Question;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Ramsey\Uuid\Uuid;

class QuestionController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['detail', 'subCategories']);
    }

    
    public function initialize()
    {
        parent::initialize();
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
       // $this->loadComponent('Security');
       $this->loadComponent('Authentication.Authentication');
    }
    public function create()
    {
        $data = new \stdClass();
        $data->question = $this->request->getData('question');
        $data->keywords = $this->request->getData('keywords');
        $data->main_category_id = $this->request->getData('main_category_id');
        $data->sub_category_id = $this->request->getData('sub_category_id');
        $data->tag_ids = $this->request->getData('tag_ids');
        $data->tag_ids = is_array($data->tag_ids) ? $data->tag_ids : [];
        $data->image_urls = $this->request->getData('image_urls');
        $data->image_urls = is_array($data->image_urls) ? $data->image_urls : [];
        $data->is_anonymous = $this->request->getData('is_anonymous');
        $form = new QuestionForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $this->request->getSession()->write('question_data', json_encode($data));
                return $this->redirect('/shitsumon-input/review');
            } else {
                $this->Flash->error('Please check the form errors!');
            }
        } else {
            if ($this->request->getSession()->check('question_data')) {
                $data = json_decode($this->request->getSession()->read('question_data'));
            }
        }
        $categoryTable = TableRegistry::getTableLocator()->get('Category');
        $popularTagsTable = TableRegistry::getTableLocator()->get('PopularTags');
        $this->set('tags',$popularTagsTable->find()->limit(14));                
        $this->set('main_categories', $categoryTable->find()->where(['parent_id' => 0]));
        $this->set('sub_categories', $categoryTable->find()->where(['parent_id' => $data->main_category_id]));
        $this->set('form', $form);
        $this->set('data', $data);
    }

    public function review()
    {
        if ($this->request->getSession()->check('question_data') === false) {
            $this->redirect('/shitsumon-input');
        }
        $data = json_decode($this->request->getSession()->read('question_data'));
        if ($this->request->is('post')) {
            /**
             * @var Question $question
             */
            $questionTable = TableRegistry::getTableLocator()->get('Question');
            $questionImageTable = TableRegistry::getTableLocator()->get('QuestionImage');
            $questionTagTable = TableRegistry::getTableLocator()->get('QuestionTag');
            $questionViewTable = TableRegistry::getTableLocator()->get('QuestionView');
            $question = $questionTable->newEntity();
            $question->hash = Uuid::uuid4();
            $question->user_id = $this->request->getAttribute('identity')->id;
            $question->category_id = $data->sub_category_id;
            $question->slug = '';
            $question->title = '';
            $question->question = $data->question;
            $question->keywords = $data->keywords;
            $question->created_at = date('Y-m-d H:i:s');
            $question->is_anonymous = $data->is_anonymous;
            $question->is_solved = 0;
            $questionTable->save($question);
            $this->request->getSession()->delete('question_data');
            foreach ($data->image_urls as $url) {
                $questionImage = $questionImageTable->newEntity();
                $questionImage->question_id = $question->id;
                $questionImage->url = $url;
                $questionImageTable->save($questionImage);
            }
            foreach ($data->tag_ids as $tagId) {
                $questionTag = $questionTagTable->newEntity();
                $questionTag->question_id = $question->id;
                $questionTag->tag_id = $tagId;
                $questionTagTable->save($questionTag);
            }
            $questionView = $questionViewTable->newEntity();
            $questionView->question_id = $question->id;
            $questionView->view_count = 0;
            $questionViewTable->save($questionView);
            return $this->redirect('/q/' . $question->hash);
        }
        $categoryTable = TableRegistry::getTableLocator()->get('Category');
        $tagTable = TableRegistry::getTableLocator()->get('Tag');
        $this->set('main_category', $categoryTable->get($data->main_category_id));
        $this->set('sub_category', $categoryTable->get($data->sub_category_id));
        $this->set('tags', $tagTable->find()->whereInList('id', $data->tag_ids));
        $this->set('data', $data);
    }

    public function subCategories()
    {
        $parentId = $this->request->getQuery('parent_id');
        $categoryTable = TableRegistry::getTableLocator()->get('Category');
        return $this->response->withType('json')
            ->withStringBody(json_encode([
                'categories' => $categoryTable->find()->where(['parent_id' => $parentId])
            ]));
    }

    public function detail()
    {
        $hash = $this->request->getParam('hash');
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $answerTable = TableRegistry::getTableLocator()->get('Answer');
        $userTable = TableRegistry::getTableLocator()->get('User');
        $question = $questionTable->find()->where(['hash' => $hash])->first();
        if ($question === null) {
            return $this->redirect('/');
        }
        $conn = ConnectionManager::get('default');
        $stmt = $conn->prepare('INSERT INTO question_view (question_id, view_count) VALUES(:question_id, 1) ON DUPLICATE KEY UPDATE view_count = view_count + 1;');
        $stmt->execute(['question_id' => $question->id]);
        $stmt->closeCursor();;

        $answers = $answerTable->find()->where(['question_id' => $question->id])->orderAsc('Answer.created_at');
        $user = $userTable->get($question->user_id);
        $this->set('answers', $answers->contain(['User']));
        $this->set('question', $question);
        $this->set('user', $user);
    }

    public function addAnswer()
    {
        $hash = $this->request->getParam('hash');
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $question = $questionTable->find()->where(['hash' => $hash])->first();
        if ($question === null) {
            return $this->redirect('/');
        }
        $form = new AnswerForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $answerTable = TableRegistry::getTableLocator()->get('Answer');
                $answer = $answerTable->newEntity();
                $answer->question_id = $question->id;
                $answer->user_id = $this->request->getAttribute('identity')->id;
                $answer->message = $this->request->getData('message');
                $answer->created_at = date('Y-m-d H:i:s');
                $answerTable->save($answer);
                if ($this->request->getAttribute('identity')->position === 'Expert') {
                    $question->has_expert_answer = 1;
                    $questionTable->save($question);
                }
                return $this->redirect('/q/' . $question->hash);
            } else {
                $this->Flash->error('Please check the form errors!');
            }
        }
    }

    public function like()
    {
        $hash = $this->request->getParam('hash');
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $question = $questionTable->find()->where(['hash' => $hash])->first();
        if ($question !== null) {
            $conn = ConnectionManager::get('default');
            $stmt = $conn->prepare('INSERT IGNORE INTO question_like (question_id, user_id, created_at) VALUES(:question_id, :user_id, :created_at)');
            $stmt->execute(['question_id' => $question->id, 'user_id' => $this->request->getAttribute('identity')->id, 'created_at' => date('Y-m-d H:i:s')]);
            $stmt->closeCursor();;
        }
        return $this->response->withType('json')
            ->withStringBody(json_encode([]));
    }
}
