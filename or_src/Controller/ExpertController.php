<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ExpertController extends AppController
{
    public function beforeFilter(Event $event)
    {
       parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['index']);
        $this->filterSubCategoryId = $this->request->getQuery('sub_category_id');
        $this->filterKeyword = $this->request->getQuery('keyword');
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
        $query = $questionTable->find()->where(['has_expert_answer' => 1])->contain(['User'])->orderDesc('Question.created_at');
        if ($this->filterSubCategoryId != '') {
            $query->where(['category_id' => $this->filterSubCategoryId]);
        }
        if ($this->filterKeyword != '') {
            $query->where(['keywords LIKE ' => '%' . $this->filterKeyword . '%']);
        }
        $this->set('questions', $this->paginate($query));
    }
}
