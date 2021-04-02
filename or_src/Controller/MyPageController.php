<?php

namespace App\Controller;

use App\Form\MessageDetailForm;
use App\Form\ProfileForm;
use Cake\Database\Expression\QueryExpression;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Ramsey\Uuid\Uuid;

class MyPageController extends AppController
{
    protected $userTable;
    protected $user;




    public function initialize()
    {
        parent::initialize();
       // $this->loadComponent('Security');
       $this->loadComponent('Authentication.Authentication');
        $this->userTable = TableRegistry::getTableLocator()->get('User');
        if ($this->request->getAttribute('identity') !== null) {
            $this->user = $this->userTable->get($this->request->getAttribute('identity')->id);
            $this->set('user', $this->user);

        }
    }

    public function index()
    {
    }

    public function profile()
    {
        $workHistoryTable = TableRegistry::getTableLocator()->get('UserWorkHistory');
        $educationHistoryTable = TableRegistry::getTableLocator()->get('UserEducationHistory');
        $userLinkTable = TableRegistry::getTableLocator()->get('UserLink');
        $this->set('work_histories', $workHistoryTable->find()->where(['user_id' => $this->user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('education_histories', $educationHistoryTable->find()->where(['user_id' => $this->user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('user_links', $userLinkTable->find()->where(['user_id' => $this->user->id])->orderDesc('type'));
    }

    public function editProfile()
    {
        $workHistoryTable = TableRegistry::getTableLocator()->get('UserWorkHistory');
        $educationHistoryTable = TableRegistry::getTableLocator()->get('UserEducationHistory');
        $userLinkTable = TableRegistry::getTableLocator()->get('UserLink');
        $form = new ProfileForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $this->user->position = $this->request->getData('position');
                $this->user->name = $this->request->getData('name');
                $this->user->kana = $this->request->getData('kana');
                $this->user->nickname = $this->request->getData('nickname');
                $this->user->company = $this->request->getData('company_name');
                $this->user->email = strtolower($this->request->getData('email'));
                $this->user->address_region = $this->request->getData('address_region');
                $this->user->postal_code = $this->request->getData('postal_code');
                $this->user->address_1 = $this->request->getData('address_1');
                $this->user->address_2 = $this->request->getData('address_2');
                $this->user->address_3 = $this->request->getData('address_3');
                $this->user->occupation = $this->request->getData('occupation');
                $this->user->qualification = $this->request->getData('qualification');
                $this->user->phone_number = $this->request->getData('phone_number');
                $this->user->introduction = $this->request->getData('introduction');
                $this->user->area_of_speciality = $this->request->getData('area_of_speciality');
                $this->user->specialized_field = $this->request->getData('specialized_field');
                $this->user->updated_at = date('Y-m-d H:i:s');
                $this->userTable->save($this->user);

                $links = $this->request->getData('link');
                $userLinkTable->deleteAll(['user_id' => $this->user->id]);
                foreach ($links as $link) {
                    $userLink = $userLinkTable->newEntity();
                    $userLink->user_id = $this->user->id;
                    $userLink->type = $link['type'];
                    $userLink->url = $link['url'];
                    $userLinkTable->save($userLink);
                }

                $work_histories = $this->request->getData('work_history');
                $workHistoryTable->deleteAll(['user_id' => $this->user->id]);
                foreach ($work_histories as $work_history) {
                    $workHistory = $workHistoryTable->newEntity();
                    $workHistory->user_id = $this->user->id;
                    $workHistory->start_year = $work_history['start_year'];
                    $workHistory->start_month = $work_history['start_month'];
                    $workHistory->end_year = $work_history['end_year'];
                    $workHistory->end_month = $work_history['end_month'];
                    $workHistory->title = $work_history['title'];
                    $workHistory->company_name = $work_history['company_name'];
                    $workHistoryTable->save($workHistory);
                }

                $education_histories = $this->request->getData('education_history');
                $educationHistoryTable->deleteAll(['user_id' => $this->user->id]);
                foreach ($education_histories as $education_history) {
                    $educationHistory = $educationHistoryTable->newEntity();
                    $educationHistory->user_id = $this->user->id;
                    $educationHistory->start_year = $education_history['start_year'];
                    $educationHistory->start_month = $education_history['start_month'];
                    $educationHistory->end_year = $education_history['end_year'];
                    $educationHistory->end_month = $education_history['end_month'];
                    $educationHistory->description = $education_history['description'];
                    $educationHistoryTable->save($educationHistory);
                }
            } else {
                $this->Flash->error('Please check the form errors!');
            }
        } else {
            $form->setData([
                'name' => $this->user->name,
                'kana' => $this->user->kana,
                'nickname' => $this->user->nickname,
                'company_name' => $this->user->company,
                'email' => $this->user->email,
                'postal_code' => $this->user->postal_code,
                'address_1' => $this->user->address_1,
                'address_2' => $this->user->address_2,
                'address_3' => $this->user->address_3,
                'occupation' => $this->user->occupation,
                'qualification' => $this->user->qualification,
                'phone_number' => $this->user->phone_number,
                'introduction' => $this->user->introduction,
                'area_of_speciality' => $this->user->area_of_speciality,
                'specialized_field' => $this->user->specialized_field
            ]);
        }
        $this->set('work_histories', $workHistoryTable->find()->where(['user_id' => $this->user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('education_histories', $educationHistoryTable->find()->where(['user_id' => $this->user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('user_links', $userLinkTable->find()->where(['user_id' => $this->user->id])->orderDesc('type'));
        $this->set('form', $form);
    }

    public function resume()
    {
        $workHistoryTable = TableRegistry::getTableLocator()->get('UserWorkHistory');
        $educationHistoryTable = TableRegistry::getTableLocator()->get('UserEducationHistory');
        $userLinkTable = TableRegistry::getTableLocator()->get('UserLink');
        $this->set('work_histories', $workHistoryTable->find()->where(['user_id' => $this->user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('education_histories', $educationHistoryTable->find()->where(['user_id' => $this->user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('user_links', $userLinkTable->find()->where(['user_id' => $this->user->id])->orderDesc('type'));
    }

    public function questions()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()
            ->notMatching('Answer')
            ->where(['Question.user_id' => $this->user->id])
            ->contain(['User'])->orderDesc('Question.created_at');
        $this->set('questions', $query);
    }

    public function answeredQuestions()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $subQuery = $questionTable->getAssociation('Answer')
            ->find()
            ->select('question_id')
            ->distinct('question_id')
            ->where(['question_id = Question.id']);
        $query = $questionTable->find()
            ->contain(['User'])
            ->where([
                'Question.user_id' => $this->user->id,
                'Question.id IN ' => $subQuery
            ])
            ->orderDesc('Question.created_at');
        $this->set('questions', $query);
    }

    public function allQuestions()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()
            ->where(['Question.user_id' => $this->user->id])
            ->contain(['User'])->orderDesc('Question.created_at');
        $this->set('questions', $query);
    }

    public function answers()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $subQuery = $questionTable->getAssociation('Answer')
            ->find()
            ->select('question_id')
            ->distinct('question_id')
            ->where([
                'question_id = Question.id',
                'user_id' => $this->user->id
            ]);
        $query = $questionTable->find()
            ->contain(['User'])
            ->where([
                'Question.id IN ' => $subQuery
            ])
            ->orderDesc('Question.created_at');
        $this->set('questions', $query);
    }

    public function bookmarks()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()
            ->matching('QuestionLike')
            ->contain(['User'])
            ->where(['QuestionLike.user_id' => $this->user->id])
            ->orderDesc('Question.created_at');
        $this->set('questions', $query);
    }

    public function markResolved()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $answerTable = TableRegistry::getTableLocator()->get('Answer');
        $answer = $answerTable->get($this->request->getParam('answer_id'));
        if ($answer == null) {
            return $this->redirect('/my-page/questions/answered');
        }
        $question = $questionTable->get($answer->question_id);
        if ($question == null || $question->user_id !== $this->request->getAttribute('identity')->id) {
            return $this->redirect('/my-page/questions/answered');
        }
        $question->is_solved = 1;
        $questionTable->save($question);
        $answerTable->updateAll(['is_correct_answer' => 0], ['question_id' => $question->id]);
        $answer->is_correct_answer = 1;
        $answerTable->save($answer);
        return $this->redirect('/my-page/questions/answered');
    }

    public function messages()
    {
        $conn = ConnectionManager::get('default');
        $sql = 'SELECT thread.*, user.kana AS user_kana, user.name AS user_name,'
            . '(SELECT is_read FROM message WHERE thread_id = thread.id AND user_id !=:current_user_id ORDER BY is_read ASC LIMIT 1) AS is_read FROM thread'
            . ' INNER JOIN thread_user ON thread_user.thread_id = thread.id AND thread_user.user_id != :current_user_id'
            . ' INNER JOIN user ON user.id = thread_user.user_id'
            . ' WHERE thread.id IN (SELECT thread_id FROM thread_user WHERE user_id =:current_user_id)';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['current_user_id' => $this->request->getAttribute('identity')->id]);
        $threads = $stmt->fetchAll(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        $this->set('threads', $threads);
    }

    public function threadDetail()
    {
        $threadId = $this->request->getParam('thread_id');
        $conn = ConnectionManager::get('default');
        $sql = 'SELECT thread.*, sender_user.kana AS sender_user_kana FROM thread'
            . ' INNER JOIN thread_user ON thread_user.thread_id = thread.id AND thread_user.user_id =:current_user_id'
            . ' INNER JOIN thread_user AS sender ON sender.thread_id = thread.id AND sender.user_id !=:current_user_id'
            . ' INNER JOIN user AS sender_user ON sender_user.id = sender.user_id'
            . ' WHERE thread.id =:thread_id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['current_user_id' => $this->request->getAttribute('identity')->id, 'thread_id' => $threadId]);
        $thread = $stmt->fetch(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        if ($thread == null) {
            return $this->redirect('/my-page/messages');
        }

        $form = new MessageDetailForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $this->request->getSession()->write('message_answer_data', json_encode($this->request->getData()));
                return $this->redirect('/my-page/messages/' . $thread->id . '/review-message');
            } else {
                $this->Flash->error('Please check the form errors!');
            }
        } else {
            if ($this->request->getSession()->check('message_answer_data')) {
                $data = json_decode($this->request->getSession()->read('message_answer_data'));
                $form->setData([
                    'message' => $data->message
                ]);
            }
        }

        $sql = 'UPDATE message SET is_read = 1 WHERE thread_id =:thread_id AND user_id !=:current_user_id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['current_user_id' => $this->request->getAttribute('identity')->id, 'thread_id' => $thread->id]);
        $stmt->closeCursor();

        $sql = 'SELECT message.*, user.name AS user_name, user.kana AS user_kana, (user_id =:current_user_id) AS is_mine FROM message'
            . ' INNER JOIN user ON user.id = message.user_id'
            . ' WHERE thread_id =:thread_id'
            . ' ORDER BY message.created_at';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['current_user_id' => $this->request->getAttribute('identity')->id, 'thread_id' => $thread->id]);
        $messages = $stmt->fetchAll(\PDO::FETCH_OBJ);
        $stmt->closeCursor();

        $this->set('form', $form);
        $this->set('thread', $thread);
        $this->set('messages', $messages);
    }

    public function reviewMessage()
    {
        $threadId = $this->request->getParam('thread_id');
        $conn = ConnectionManager::get('default');
        $sql = 'SELECT thread.*, receiver_user.id AS receiver_user_id, receiver_user.kana AS receiver_user_kana FROM thread'
            . ' INNER JOIN thread_user ON thread_user.thread_id = thread.id AND thread_user.user_id =:current_user_id'
            . ' INNER JOIN thread_user AS receiver ON receiver.thread_id = thread.id AND receiver.user_id !=:current_user_id'
            . ' INNER JOIN user AS receiver_user ON receiver_user.id = receiver.user_id'
            . ' WHERE thread.id =:thread_id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['current_user_id' => $this->request->getAttribute('identity')->id, 'thread_id' => $threadId]);
        $thread = $stmt->fetch(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        if ($thread == null) {
            return $this->redirect('/my-page/messages/' . $thread->id);
        }
        $data = json_decode($this->request->getSession()->read('message_answer_data'));
        if ($this->request->is('post')) {
            $threadTable = TableRegistry::getTableLocator()->get('Thread');
            $threadTable->updateAll(['updated_at' => date('Y-m-d H:i:s')], ['id' => $thread->id]);
            $messageTable = TableRegistry::getTableLocator()->get('Message');

            $message = $messageTable->newEntity();
            $message->thread_id = $thread->id;
            $message->user_id = $this->request->getAttribute('identity')->id;
            $message->message = $data->message;
            $message->created_at = date('Y-m-d H:i:s');
            $messageTable->save($message);

            $this->request->getSession()->delete('message_answer_data');
            return $this->redirect('/my-page/messages/' . $thread->id);
        }
        $this->set('thread', $thread);
        $this->set('data', $data);
    }
}
