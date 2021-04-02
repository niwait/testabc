<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
class JobsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
     $this->Authentication->allowUnauthenticated(['index']);
    }
    public $paginate = [
      'limit' => 3,
        
   ];
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
     

     $jobsTable = TableRegistry::get('job');
       
     if (empty($this->request->getQuery("job")) == false && $this->request->getQuery("job.action") == "get") {
        
         $filterjob = [];
         foreach ($this->request->getQuery("job") as $queryKey => $queryValue) {
           
           if (empty($queryValue) == true || $queryKey == "action") {
             continue;
           }
           array_push($filterjob, [
             sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
           ]);
         }
         // adominsテーブルを検索(絞り込み)
         //$jobinfo = $jobsTable->find()->where($filterjob);
        // $this->set(compact("jobinfo", "jobTable"));
         $this->set('jobinfo', $this->paginate($jobsTable->find()->where($filterjob)->orderDesc('id')));
         return;
       } else {
         // adominssテーブルを検索
         //$jobinfo = $jobsTable->find();
         //$this->set(compact("jobinfo", "jobTable"));
         $this->set('jobinfo', $this->paginate($jobsTable->find()->orderDesc('id')));
        }

    }
    public function worksentry(){
     

      $bannerTable=TableRegistry::get('banners');
      $bannerinfo=$bannerTable->find()->where([
        "showhide"=>"公開",
        "startday <= "=>date('Y-m-d'),
        "endday >= "=>date('Y-m-d'),
        ]);
       $this->set(compact("bannerinfo"));
 
      //写真
      $prsTable = TableRegistry::get('prs');
     
      $prinfo = $prsTable->find()->where([
      "showhide"=>"公開",
      "startday <= "=>date('Y-m-d'),
      "endday >= "=>date('Y-m-d'),
      ]);

      $this->set(compact("prinfo"));



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


                 $email = new Email('default');
                 $email->viewBuilder()->setTemplate('jobs_apply')
                     ->setVar('apply_data', $this->request->session()->read());
                 $email
                     ->setFrom('noreply@demo.com')
                     ->setTo($this->request->session()->read('app.mail'))
                     ->setSubject('Please verify your email for jobapply!')
                     ->send();



                return $this->redirect(['action' => 'worksend']);


             }
     }



  }
  public function worksend() {
     
      
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
