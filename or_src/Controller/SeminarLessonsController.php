<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class SeminarLessonsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['index']);
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
     $bannerTable=TableRegistry::get('banners');
     $bannerinfo=$bannerTable->find()->where([
       "showhide"=>"公開",
       "startday <= "=>date('Y-m-d'),
       "endday >= "=>date('Y-m-d'),
       ]);
      $this->set(compact("bannerinfo"));
  //写真
  $prTable = TableRegistry::get('prs');
    
  $prinfo = $prTable->find()->where([
  "showhide"=>"公開",
  "startday <= "=>date('Y-m-d'),
  "endday >= "=>date('Y-m-d'),
  ]);

  $this->set(compact("prinfo"));
  
  
    $seminarTable = TableRegistry::get('seminar');
  
         
       if (empty($this->request->getQuery("seminar")) == false && $this->request->getQuery("seminar.action") == "get") {
          
           $filterseminar = [];
           foreach ($this->request->getQuery("seminar") as $queryKey => $queryValue) {
             
             if (empty($queryValue) == true || $queryKey == "action") {
               continue;
             }
             array_push($filterseminar, [
               sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
             ]);
           }
           // adominsテーブルを検索(絞り込み)
           $seminarinfo = $seminarTable->find()->where($filterseminar);
          
           $this->set(compact("seminarinfo", "seminarTable"));
           return;
         } else {
           // adominssテーブルを検索
           $seminarinfo = $seminarTable->find();
          
           $this->set(compact("seminarinfo", "seminarTable"));
         }
  
    
  
      }
}
