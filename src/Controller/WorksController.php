<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
//bakuで作ったのちモデルを接続するために必要
use Cake\ORM\TableRegistry;

class WorksController extends AppController
{
  
  public function initialize()
  {
      parent::initialize();
      /*
       * Enable the following component for recommended CakePHP security settings.
       * see https://book.cakephp.org/3.0/en/controllers/components/security.html
       */
      //$this->loadComponent('Security');
     $this->loadComponent('Authentication.Authentication');
  }

    public function index()
    {

      
      $this->viewBuilder()->setLayout('raycp');

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





     $jobsTable = TableRegistry::get('jobs');
       
     if (empty($this->request->getQuery("jobs")) == false && $this->request->getQuery("jobs.action") == "get") {
        
         $filterjobs = [];
         foreach ($this->request->getQuery("jobs") as $queryKey => $queryValue) {
           
           if (empty($queryValue) == true || $queryKey == "action") {
             continue;
           }
           array_push($filterjobs, [
             sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
           ]);
         }
         // adominsテーブルを検索(絞り込み)
         $jobsinfo = $jobsTable->find()->where($filterjobs);
        
         $this->set(compact("jobsinfo", "jobsTable"));
         return;
       } else {
         // adominssテーブルを検索
         $jobsinfo = $jobsTable->find();
        
         $this->set(compact("jobsinfo", "jobsTable"));
       }

  

    }

 

    public function worksentry(){
     
        $this->viewBuilder()->setLayout('raycp');

        $bannerTable=TableRegistry::get('banners');
        $bannerinfo=$bannerTable->find()->where([
          "showhide"=>"公開",
          "startday <= "=>date('Y-m-d'),
          "endday >= "=>date('Y-m-d'),
          ]);
         $this->set(compact("bannerinfo"));
   
        //写真
        $prsTable = TableRegistry::get('prs');
       
        $prsinfo = $prsTable->find()->where([
        "showhide"=>"公開",
        "startday <= "=>date('Y-m-d'),
        "endday >= "=>date('Y-m-d'),
        ]);

        $this->set(compact("prsinfo"));



        $appTable = TableRegistry::get('app');
        $this->set(compact("appTable"));


        $appValidation = $appTable->newEntity($this->request->getData("app"));
        if (
          empty($this->request->getData("app")) == false &&
          empty($appValidation->getErrors()) == false
        ) {
      
          $this->set(compact("resultapp", "appTable"));

          $errorMessage = "";
          foreach ($appValidation->getErrors() as $keyCount => $errorData) {
            foreach ($errorData as $errorType => $error) {
              $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
            }
          }
          
          echo"<script>";
          echo"alert('".$errorMessage."');";
          echo"</script>";
          return;
        }

        if($this->request->getData("app.action") == "send" && empty($appValidation->getErrors()) == true){
          $appvalidation = $appTable->newEntity($this->request->getData('app'));
          $this->set(compact("appvalidation"));
          
          if(empty($appValidation->getErrors()) == true){
            $this->request->getSession()->write('app', $this->request->getData('app'));
            return $this->redirect(['action' => 'workscheck']);
          }else{
            print_r($appValidation);
          }
         
          
        }
        


       









    }
    public function workscheck(){
     
        $this->viewBuilder()->setLayout('raycp');

        $bannerTable=TableRegistry::get('banners');
        $bannerinfo=$bannerTable->find()->where([
          "showhide"=>"公開",
          "startday <= "=>date('Y-m-d'),
          "endday >= "=>date('Y-m-d'),
          ]);
         $this->set(compact("bannerinfo"));
   
        //写真
        $prsTable = TableRegistry::get('prs');
       
        $prsinfo = $prsTable->find()->where([
        "showhide"=>"公開",
        "startday <= "=>date('Y-m-d'),
        "endday >= "=>date('Y-m-d'),
        ]);

        $this->set(compact("prsinfo"));


        //データ受け取り
        $appTable = TableRegistry::get('app');

        if(!empty($this->request->getData("app.appsubmit"))){
          //  sessionを作成し
          $appvalidation = $appTable->newEntity($this->request->session()->read());
           //エラーがあったらindexへ移動
              if($appvalidation->getErrors()) {
                return $this->redirect(['action' => 'index']);
               }else{
                   //db書き込み処理

                   $appTable->save($appvalidation);
                  return $this->redirect(['action' => 'worksend']);

               }
       }














    }
    public function worksend() {
        $this->viewBuilder()->setLayout('raycp');
        
        $bannerTable=TableRegistry::get('banners');
        $bannerinfo=$bannerTable->find()->where([
          "showhide"=>"公開",
          "startday <= "=>date('Y-m-d'),
          "endday >= "=>date('Y-m-d'),
          ]);
         $this->set(compact("bannerinfo"));
   
        //写真
        $prsTable = TableRegistry::get('prs');
       
        $prsinfo = $prsTable->find()->where([
        "showhide"=>"公開",
        "startday <= "=>date('Y-m-d'),
        "endday >= "=>date('Y-m-d'),
        ]);

        $this->set(compact("prsinfo"));


    }





    



}
