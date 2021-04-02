<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
class SeminarLessonsController extends AppController
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
      $this->set('seminarinfo', $this->paginate($seminarTable->find()->where($filterseminar)->orderDesc('id')));
      return;
    } else {
      $this->set('seminarinfo', $this->paginate($seminarTable->find()->orderDesc('id')));
    }



    $seminarlikeTable = TableRegistry::get('seminar_like');
    $likes = $seminarlikeTable->find()->where([ 
      "user_id"=>$this->request->getSession()->read('Auth.id')
    ]);
    
    $likes_info=[];
    
    foreach($likes as$key=>$row){
     array_push($likes_info, $row["seminar_id"]);
     
    }
    $this->set(compact("likes_info"));







  }



  public function seminarentry(){

    //リターン
    $seminarTable=TableRegistry::get('seminar');
    $seminarresult=[];
    $seminarinfo = $seminarTable->find()->where(["id"=>$this->request->getQuery("seminar.id")])->first();

    if(empty($this->request->getQuery("seminar.id")) ||  empty($seminarinfo) ){

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




    $subscTable = TableRegistry::get('subscribe');

    $this->set(compact("subscTable"));

    $subscValidation = $subscTable->newEntity($this->request->getData("subscribe"));

    if (
      empty($this->request->getData("subscribe")) == false  &&
      empty($subscValidation->getErrors()) == false
    ) {

      $this->set(compact("subscTable"));

      $errorMessage = "";
      foreach ($subscValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
        }
      }

      echo"<script>";
      echo"alert('".$errorMessage."');";
      echo"</script>";
      return;
    }


    if($this->request->getData("subscribe.action") == "send" && empty($subscValidation->getErrors()) == true){
      $subscValidation = $subscTable->newEntity($this->request->getData('subscribe'));
      $this->set(compact("subscValidation"));

      if(empty($subscValidation->getErrors()) == true){
        $this->request->getSession()->write('subscribe', $this->request->getData('subscribe'));
        return $this->redirect([
          'action' => 'seminarcheck',
          '?' => [
            'seminar' => ['id'=>$this->request->getQuery("seminar.id")],
          ]
        ]);
      }else{
        print_r($subscValidation);
      }
    }
    $this->set(compact("seminarTable"));
  }


  public function seminarcheck(){

    $seminarTable=TableRegistry::get('seminar');
  
    $seminarresult=[];
    $seminarinfo = $seminarTable->find()->where(["id"=>$this->request->getQuery("seminar.id")])->first();

    if(empty($this->request->getQuery("seminar.id")) ||  empty($seminarinfo) ){
     
        //ここでエラー

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
    $subscTable = TableRegistry::get('subscribe');

    if(!empty($this->request->getData("subscribe.submit"))){
      //  sessionを作成し
      $subscvalidation = $subscTable->newEntity($this->request->session()->read());
      //エラーがあったらindexへ移動
      if($subscvalidation->getErrors()) {
        
        return $this->redirect(['action' => 'index']);
      }else{
        //db書き込み処理

        $subscTable->save($subscvalidation);

      //ここでエラー
        $email = new Email('default');
        $email->viewBuilder()->setTemplate('seminar_apply')
        ->setVars([
          'apply_data'=> $this->request->session()->read('subscribe'),
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
        $seminardata= $seminarTable->find()->where(["id"=>$this->request->getQuery("seminar.id")])->first();

        $email
        ->setFrom('noreply@demo.com')//個々のアドレスを取得
        ->setTo($this->request->session()->read('subscribe.mail'))
        ->setCc($seminardata->mail)
        ->setSubject('Please verify your email for jobapply!')
        ->send();

        return $this->redirect(['action' => 'seminarend']);


      }
    }



  }


  public function seminarend(){
    
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


  

  }





  public function like(){
   
    $seminarlikeTable = TableRegistry::get('seminar_like');

    $seminarlikeValidation = $seminarlikeTable->newEntity([
      "user_id"=>$this->request->getSession()->read('Auth.id'),
      "seminar_id"=>$this->request->getParam('id'),
      "created"=>date('Y-m-d H:i:s')
     
    ]);

    if (empty($seminarlikeValidation->getErrors())) {
      //バリデーション
      $seminarlikeTable->save($seminarlikeValidation);
    }
    
    return $this->response->withType('json')
    ->withStringBody(json_encode([]));







    

  }


















}
