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
      'limit' => 10,

   ];
    public function initialize()
    {

        parent::initialize();

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

         $this->set('jobinfo', $this->paginate($jobsTable->find()->where($filterjob)->orderDesc('id')));
         return;
       } else {
         $this->set('jobinfo', $this->paginate($jobsTable->find()->orderDesc('id')));
        }

//
        $joblikeTable = TableRegistry::get('job_like');
        $likes = $joblikeTable->find()->where([ 
          "user_id"=>$this->request->getSession()->read('Auth.id')
        ]);
        
        $likes_info=[];
        
        foreach($likes as$key=>$row){
         array_push($likes_info, $row["job_id"]);
         
        }
        $this->set(compact("likes_info"));








    }


    
    public function worksentry(){

    //リターン
    $jobTable=TableRegistry::get('job');
    $jobresult=[];
    $jobinfo = $jobTable->find()->where(["id"=>$this->request->getQuery("job.id")])->first();
    $this->set(compact("jobinfo"));
    

    if(empty($this->request->getQuery("job.id")) ||  empty($jobinfo) ){

      return $this->redirect(['action' => 'index']);


    }

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


     $appTable = TableRegistry::get('app');

      $this->set(compact("appTable"));

      $appValidation = $appTable->newEntity($this->request->getData("app"));

      if (
        empty($this->request->getData("app")) == false  &&
        empty($appValidation->getErrors()) == false
      ) {


        $this->set(compact("appTable"));

        $errorMessage = "";
        foreach ($appValidation->getErrors() as $keyCount => $errorData) {
          foreach ($errorData as $errorType => $error) {
            $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
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
          return $this->redirect([
            'action' => 'workscheck',
          '?' => [
            'job' => ['id'=>$this->request->getQuery("job.id")],
        ]
        ]);
        }else{
          print_r($appValidation);
        }
      }
      $this->set(compact("jobTable"));


  }





  public function workscheck(){

    $jobTable=TableRegistry::get('job');
    $jobresult=[];
    $jobinfo = $jobTable->find()->where(["id"=>$this->request->getQuery("job.id")])->first();
    $this->set(compact("jobinfo"));



    if(empty($this->request->getQuery("job.id")) ||  empty($jobinfo) ){

      return $this->redirect(['action' => 'index']);

    }



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

                     ->setVars([
                      'apply_jobs'=>$jobinfo,
                       'apply_data'=> $this->request->session()->read('app'),
                       'apply_lavel'=> [
                         "name"=>"名前",
                         "kana"=>"カナ",
                         "postcode"=>"郵便番号",
                         "address_a"=>"住所",
                         "address_b"=>"住所",
                         "address_c"=>"住所",
                         "address_d"=>"住所",
                         "mail"=>"メールアドレス",
                         "tel"=>"電話番号",
                         "educat"=>"学歴",
                         "skill"=>"スキル",
                         "pr"=>"自己PR",
                      ],
                     ]);
                    $jobdata= $jobTable->find()->where(["id"=>$this->request->getQuery("job.id")])->first();

                 $email
                     ->setFrom('noreply@demo.com')//個々のアドレスを取得
                     ->setTo($this->request->session()->read('app.mail'))
                     ->setCc($jobdata->mail)
                     ->setSubject('Please verify your email for jobapply!')
                     ->send();



                return $this->redirect(['action' => 'worksend']);


             }
     }



  }
  public function worksend() {
        $jobTable=TableRegistry::get('job');
        $jobresult=[];
        $jobinfo = $jobTable->find()->where(["id"=>$this->request->getQuery("job.id")])->first();
        $this->set(compact("jobinfo"));
   

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

  public function like(){
   
    $joblikeTable = TableRegistry::get('job_like');

    $joblikeValidation = $joblikeTable->newEntity([
      "user_id"=>$this->request->getSession()->read('Auth.id'),
      "job_id"=>$this->request->getParam('id'),
      "created"=>date('Y-m-d H:i:s')
     
    ]);

    if (empty($joblikeValidation->getErrors())) {
      //バリデーション
      $joblikeTable->save($joblikeValidation);
    }

    return $this->response->withType('json')
    ->withStringBody(json_encode([]));

  }




}
