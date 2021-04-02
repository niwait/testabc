<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class HomeController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
      //  $this->Authentication->allowUnauthenticated(['home']);
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
      $this->Authentication->allowUnauthenticated(['home']);
    
    }

    public function home()
    {
        $questionTable = TableRegistry::getTableLocator()->get('Question');
        $popularTagsTable = TableRegistry::getTableLocator()->get('PopularTags');
        $query = $questionTable->find()->contain(['User'])->orderDesc('Question.created_at');
        $this->set('questions', $this->paginate($query));
        $this->set('popular_tags', $popularTagsTable->find()->limit(5));


        //写真
        $prTable = TableRegistry::get('prs');
            
        $prinfo = $prTable->find()->where([
        "showhide"=>"公開",
        "startday <= "=>date('Y-m-d'),
        "endday >= "=>date('Y-m-d'),
        ]);
        $this->set(compact("prinfo"));
  
        $ranksTable = TableRegistry::get('question');
        $ranksinfo = $ranksTable->find()->where([
            "ranks.ranksNo <=" =>5,
            "ranks.ranksNo >= "=>1,
            ])
        ->join([
            'table' => 'ranks',
            'alias' => 'ranks',
            'type' => 'INNER',
            'conditions' => 'ranks.questionId = question.id',

        ])->select([
            'ranksNo' => 'ranks.ranksNo',
            'question' => 'question.question',
            'hash' => 'question.hash',
          
        ])->order(['ranks.ranksNo' => 'ASC']);

        $this->set(compact("ranksinfo"));
      





    }

    public function freeda(){

    }
    public function privacy(){

    }
    public function questions(){

    }
    public function terms(){

    }
    public function inquiry(){

    }
    









}
