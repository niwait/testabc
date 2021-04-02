<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
//bakuで作ったのちモデルを接続するために必要
use Cake\ORM\TableRegistry;

class SeminarsController extends AppController
{


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
     

      //写真
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



  $seminarsTable = TableRegistry::get('seminars');

       
     if (empty($this->request->getQuery("seminars")) == false && $this->request->getQuery("seminars.action") == "get") {
        
         $filterseminars = [];
         foreach ($this->request->getQuery("seminars") as $queryKey => $queryValue) {
           
           if (empty($queryValue) == true || $queryKey == "action") {
             continue;
           }
           array_push($filterseminars, [
             sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
           ]);
         }
         // adominsテーブルを検索(絞り込み)
         $seminarsinfo = $seminarsTable->find()->where($filterseminars);
        
         $this->set(compact("seminarsinfo", "seminarsTable"));
         return;
       } else {
         // adominssテーブルを検索
         $seminarsinfo = $seminarsTable->find();
        
         $this->set(compact("seminarsinfo", "seminarsTable"));
       }

  

    }

 

   


}
