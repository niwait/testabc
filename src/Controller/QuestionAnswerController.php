<?php

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class QuestionAnswerController extends AppController
{
    protected $filterSubCategoryId;
    protected $filterKeyword;

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['index', 'solved', 'all', 'tag']);
        $this->loadComponent('Paginator');
        $this->filterSubCategoryId = $this->request->getQuery('sub_category_id');
        $this->filterKeyword = $this->request->getQuery('keyword');
        $categoryTable = TableRegistry::getTableLocator()->get('Category');
        $this->set('main_categories', $categoryTable->find()->where(['parent_id' => 0]));
        $this->set('sub_categories', $categoryTable->find()->where(['parent_id' => $this->request->getQuery('main_category_id')]));
        $this->set('main_category_id', $this->request->getQuery('main_category_id'));
        $this->set('sub_category_id', $this->filterSubCategoryId);
        $this->calculateMonthlyRanking();
        $this->calculateWeeklyRanking();
        $this->calculateMonthlyAnswerRanking();
        $this->calculateMonthlyAnswerLikeRanking();
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

    public function index()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()->where(['is_solved' => 0])->contain(['User'])->orderDesc('Question.created_at');
        if ($this->filterSubCategoryId != '') {
            $query->where(['category_id' => $this->filterSubCategoryId]);
        }
        if ($this->filterKeyword != '') {
            $query->where(['keywords LIKE ' => '%' . $this->filterKeyword . '%']);
        }
        $this->set('questions', $this->paginate($query));


         //写真
         $prTable = TableRegistry::get('prs');
            
         $prinfo = $prTable->find()->where([
         "showhide"=>"公開",
         "startday <= "=>date('Y-m-d'),
         "endday >= "=>date('Y-m-d'),
         ]);
         $this->set(compact("prinfo"));
   



    }

    public function solved()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()->where(['is_solved' => 1])->contain(['User'])->orderDesc('Question.created_at');
        if ($this->filterSubCategoryId != '') {
            $query->where(['category_id' => $this->filterSubCategoryId]);
        }
        if ($this->filterKeyword != '') {
            $query->where(['keywords LIKE ' => '%' . $this->filterKeyword . '%']);
        }
        $this->set('questions', $this->paginate($query));
             //写真
             $prTable = TableRegistry::get('prs');
            
             $prinfo = $prTable->find()->where([
             "showhide"=>"公開",
             "startday <= "=>date('Y-m-d'),
             "endday >= "=>date('Y-m-d'),
             ]);
             $this->set(compact("prinfo"));
    }
    public function calculateMonthlyRanking()
    {
        $startDate = (new \DateTime())->sub(date_interval_create_from_date_string('30 days'));
        $conn = ConnectionManager::get('default');
        $stmt = $conn->prepare(
            'SELECT question.* FROM question_view'
            . ' INNER JOIN question ON question.id = question_view.question_id'
            . ' WHERE date BETWEEN :start_date AND :end_date'
            . ' ORDER BY view_count DESC'
            . ' LIMIT 5'
        );
        $stmt->execute(['start_date' => $startDate->format('Y-m-d'), 'end_date' => date('Y-m-d')]);
        $questions = $stmt->fetchAll(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        $this->set('monthly_ranking', $questions);
    }

    public function calculateWeeklyRanking()
    {
        $startDate = (new \DateTime())->sub(date_interval_create_from_date_string('7 days'));
        $conn = ConnectionManager::get('default');
        $stmt = $conn->prepare(
            'SELECT view_count, question.* FROM question_view'
            . ' INNER JOIN question ON question.id = question_view.question_id'
            . ' WHERE date BETWEEN :start_date AND :end_date'
            . ' ORDER BY view_count DESC'
            . ' LIMIT 5'
        );
        $stmt->execute(['start_date' => $startDate->format('Y-m-d'), 'end_date' => date('Y-m-d')]);
        $questions = $stmt->fetchAll(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        $this->set('weekly_ranking', $questions);
    }

    public function calculateMonthlyAnswerRanking()
    {
        $startDate = (new \DateTime())->sub(date_interval_create_from_date_string('30 days'));
        $conn = ConnectionManager::get('default');
        $stmt = $conn->prepare(
            'SELECT question.* FROM question_answer_count'
            . ' INNER JOIN question ON question.id = question_answer_count.question_id'
            . ' WHERE date BETWEEN :start_date AND :end_date'
            . ' ORDER BY answer_count DESC'
            . ' LIMIT 30'
        );
        $stmt->execute(['start_date' => $startDate->format('Y-m-d'), 'end_date' => date('Y-m-d')]);
        $questions = $stmt->fetchAll(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        $this->set('monthly_answer_ranking', $questions);
    }

    public function calculateMonthlyAnswerLikeRanking()
    {
        $startDate = (new \DateTime())->sub(date_interval_create_from_date_string('7 days'));
        $conn = ConnectionManager::get('default');
        $stmt = $conn->prepare(
            'SELECT question.* FROM question_like_count'
            . ' INNER JOIN question ON question.id = question_like_count.question_id'
            . ' WHERE date BETWEEN :start_date AND :end_date'
            . ' ORDER BY like_count DESC'
            . ' LIMIT 30'
        );
        $stmt->execute(['start_date' => $startDate->format('Y-m-d'), 'end_date' => date('Y-m-d')]);
        $questions = $stmt->fetchAll(\PDO::FETCH_OBJ);
        $stmt->closeCursor();
        $this->set('monthly_answer_like_ranking', $questions);
    }

    public function all()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()->contain(['User'])->orderDesc('Question.created_at');
        if ($this->filterSubCategoryId != '') {
            $query->where(['category_id' => $this->filterSubCategoryId]);
        }
        if ($this->filterKeyword != '') {
            $query->where(['keywords LIKE ' => '%' . $this->filterKeyword . '%']);
        }
        $this->set('questions', $this->paginate($query));
             //写真
             $prTable = TableRegistry::get('prs');
            
             $prinfo = $prTable->find()->where([
             "showhide"=>"公開",
             "startday <= "=>date('Y-m-d'),
             "endday >= "=>date('Y-m-d'),
             ]);
             $this->set(compact("prinfo"));
    }

    public function tag()
    {
        $tagId = $this->request->getParam('id');
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $query = $questionTable->find()
            ->matching('QuestionTag', function ($q) use ($tagId) {
                return $q->where(['tag_id' => $tagId]);
            })
            ->contain(['User'])
            ->orderDesc('Question.created_at');
        if ($this->filterSubCategoryId != '') {
            $query->where(['category_id' => $this->filterSubCategoryId]);
        }
        if ($this->filterKeyword != '') {
            $query->where(['keywords LIKE ' => '%' . $this->filterKeyword . '%']);
        }
        $this->set('questions', $this->paginate($query));
             //写真
             $prTable = TableRegistry::get('prs');
            
             $prinfo = $prTable->find()->where([
             "showhide"=>"公開",
             "startday <= "=>date('Y-m-d'),
             "endday >= "=>date('Y-m-d'),
             ]);
             $this->set(compact("prinfo"));
    }
}
