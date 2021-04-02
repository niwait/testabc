<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class HomeController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['home']);
        $this->loadComponent('Paginator');
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

    public function home()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $popularTagsTable = TableRegistry::getTableLocator()->get('PopularTags');
        $query = $questionTable->find()->contain(['User'])->orderDesc('Question.created_at');
        $this->set('questions', $this->paginate($query));
        $this->set('popular_tags', $popularTagsTable->find()->limit(5));
    }
}
