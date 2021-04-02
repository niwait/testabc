<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
use Cake\Event\Event;

use Cake\ORM\TableRegistry;

class AdominsController extends AppController
{
  public function beforeFilter(Event $event)
  {
    // AppController の共通関数を継承
    parent::beforeFilter($event);

    // ログイン認証設定
    $this->loadComponent('Auth', [
      // ログイン認証のデータ
      'authenticate' => [
        'Form' => [
          'userModel' => 'Adomins',
          'fields' => [
            'username' => 'id',
            'password' => 'password'
          ]
        ]
      ],
      // ログアウト先
      'loginRedirect' => [
        'controller' => 'Adomins',
        'action' => 'index'
      ],
      // ログイン先
      'logoutRedirect' => [
        'controller' => 'Adomins',
        'action' => "login"
      ],
      // ログインしていない場合
      'loginAction' => [
        'controller' => 'Adomins',
        'action' => "login"
      ]
    ]);
    // login はログイン確認不要
    $this->Auth->allow("login");
  }

  public function index(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(2, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }

    $this->viewBuilder()->setLayout('adomin');


    $userTable = TableRegistry::get('user');

    $resultuser = $userTable->find();


    if (empty($this->request->getData("user")) == false && $this->request->getData("user.action") == "delete") {


      $editRow = $userTable->get($this->request->getData("user.id"));

      $editRow->status = 2;

      $userTable->save($editRow);
    }







    if (empty($this->request->getQuery("user")) == false && $this->request->getQuery("user.action") == "get") {

      $filteruser = [];
      foreach ($this->request->getQuery("user") as $queryKey => $queryValue) {

        if (empty($queryValue) == true || $queryKey == "action") {
          continue;
        }
        array_push($filteruser, [
          sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
        ]);
      }

      $resultuser = $userTable->find()->where($filteruser);

      $this->set(compact("resultuser", "userTable"));
      return;
    } else {

      $resultuser = $userTable->find();

      $this->set(compact("resultuser", "userTable"));
    }
  }


public function dw(){


  header('Content-Type: text/csv');
header("Content-Disposition: attachment; filename=hoge.csv");
//ビューを使わない
$this->autoRender = false;
//Content-Typeを指定
$this->response->type('csv');
//download()内ではheader("Content-Disposition: attachment; filename=hoge.csv")を行っている
$this->response->download("ダウンロード.csv");
$fp = fopen('php://output','w');
//CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);
$userTable = TableRegistry::get('user');
$resultuser = $userTable->find();
/*$user_list = [
  ["日本語"],
  ["09020"],
  ["テスト"],
];
foreach($resultuser as $key=>$row){
 // fputcsv($fp, $user);
 foreach($row as $colname=>$value){
  echo"<pre>";
  print_r($row);
  echo"</pre>";
 }
  echo"<pre>";
  print_r($key);
  echo"</pre>";
}
*/
$columns = $userTable->schema()->columns();
  
fputcsv($fp, $columns);
  
foreach($resultuser as $key=>$row){
  // fputcsv($fp, $user);
  $csvrow=[];
  foreach($columns as $colname){
    array_push($csvrow,$row[$colname]);
  }
  fputcsv($fp, $csvrow);
 }
fclose($fp);

}






  public function indexin(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(2, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }

    $this->viewBuilder()->setLayout('adomin');
    
    $userTable = TableRegistry::get('user');
  
    
    $userValidation = $userTable->newEntity($this->request->getData("user"));

    if (empty($this->request->getData("user")) == false && empty($userValidation->getErrors()) == false) {
      $this->set(compact("userTable"));

      $errorMessage = "";
      foreach ($userValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
        }
      }
      echo "<script>";
      echo "alert('" . $errorMessage . "');";
      echo "</script>";
      return;
    }

    if ($this->request->getData("user.action") == "send") {

      $userTable->save($userValidation);
    }
  }
  public function indexup(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(2, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $userTable=TableRegistry::get('user');

    if($this->request->getData("user.action") == "edit" && !empty($this->request->getQuery("user.id"))){
      echo"更新";
      $editRow = $userTable->get($this->request->getQuery("user.id"));

      $editRow->name = $this->request->getData("user.name");
      $editRow->kana = $this->request->getData("user.kana");
      $editRow->nickname = $this->request->getData("user.nickname");
      $editRow->company = $this->request->getData("user.company");
      $editRow->position = $this->request->getData("user.position");
      $editRow->position_detail = $this->request->getData("user.position_detail");
      $editRow->email = $this->request->getData("user.email");
      $editRow->phone_number = $this->request->getData("user.phone_number");
      $editRow->password = $this->request->getData("user.password");
      $editRow->address_region = $this->request->getData("user.address_region");
      $editRow->birth = $this->request->getData("user.birth");

      $userTable->save($editRow);
    }
    $userTable=TableRegistry::get('user');
    $userresult=[];
    if($this->request->getQuery("user")){
      $this->request->getQuery("user");
      $userTable = $userTable->find()->where(["id"=>$this->request->getQuery("user.id")])->first();

    }
    $this->set(compact("userTable"));
  }
  ////////////////////////////////////////////////////////////////////////
  public function adomin(){

    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(3, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $adominTable = TableRegistry::get("adomins");
    $resultadomins = $adominTable->find();

    if (empty($this->request->getData("adomins")) == false && $this->request->getData("adomins.action") == "delete") {
      $deleteRow = $adominTable->get($this->request->getData("adomins.id"));
      $adominTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("adomins")) == false && $this->request->getQuery("adomins.action") == "get") {
      $filterAdomins = [];
      foreach ($this->request->getQuery("adomins") as $queryKey => $queryValue) {
        if (empty($queryValue) == true || $queryKey == "action") {
          continue;
        }
        array_push($filterAdomins, [
          sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
        ]);
      }
      $resultadomins = $adominTable->find()->where($filterAdomins);
      $this->set(compact("resultadomins", "adominTable"));
      return;
    } else {
      $resultadomins = $adominTable->find();
      $this->set(compact("resultadomins", "adominTable"));
    }
  }


  public function adominin(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(3, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }

    $this->viewBuilder()->setLayout('adomin');
    $adominsTable = TableRegistry::get("adomins");
    $resultadomins = $adominsTable->find();
     $this->set(compact("adominsTable"));
    $adominsValidation = $adominsTable->newEntity($this->request->getData("adomins"));

    if (empty($this->request->getData("adomins")) == false &&empty($adominsValidation->getErrors()) == false){
      $this->set(compact("resultadomins", "adominsTable"));

      $errorMessage = "";
      foreach ($adominsValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
        }
      }
      echo "<script>";
      echo "alert('" . $errorMessage . "');";
      echo "</script>";
      return;
    }

  // POSTデータにて action が insert の場合 データを挿入
    if (
      empty($this->request->getData("adomins")) == false &&
      $this->request->getData("adomins.action") == "send" &&
      empty($adominsValidation->getErrors()) == true
    ) {
      $adominsTable->save($adominsValidation);
    }
  }

  public function adominup(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(3, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $adominTable=TableRegistry::get('adomins');

    if($this->request->getData("adomins.action") == "edit" && !empty($this->request->getQuery("adomins.id"))){
      echo"更新";
      $editRow = $adominTable->get($this->request->getQuery("adomins.id"));
      $editRow->name = $this->request->getData("adomins.name");
      $editRow->kana = $this->request->getData("adomins.kana");
      $editRow->tel = $this->request->getData("adomins.tel");
      $editRow->company = $this->request->getData("adomins.company");
      $editRow->mail = $this->request->getData("adomins.mail");
      $editRow->password = $this->request->getData("adomins.password");
      $editRow->adomin_no = $this->request->getData("adomins.adomin_no");
      $adominTable->save($editRow);
    }

    $adominTable=TableRegistry::get('adomins');
    $adominsresult=[];

    if($this->request->getQuery("adomins")){
      $this->request->getQuery("adomins");
      $adominTable = $adominTable->find()->where(["id"=>$this->request->getQuery("adomins.id")])->first();
    }
    $this->set(compact("adominTable"));
  }

  /////////////////////////////////////////////////////////////////////////////////////////////

  public function pr()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(4, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $prsTable = TableRegistry::get('prs');

    $rquestdata=$this->request->getData("prs");
    if(!empty($rquestdata["img"]) && $rquestdata['action']== "send"){
      $file = $rquestdata["img"];
      $rquestdata["img"]='img/primg/' .  $file['name'];
    }
    $prsValidation = $prsTable->newEntity($rquestdata);

    if ($rquestdata['action']== "send") {
      if(!empty($rquestdata["img"])){
        move_uploaded_file($file['tmp_name'],$rquestdata["img"] );
      }
      $prsTable->save($prsValidation);
    }elseif ($rquestdata["action"] == "delete") {
      echo "削除";
      $deleteRow = $prsTable->get($rquestdata["id"]);
      $prsTable->delete($deleteRow);
    }
    $prsinfo = $prsTable->find();
    $this->set(compact("prsinfo"));
    $this->set(compact("prsTable"));
  }


  public function prin(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(4, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }

    $this->viewBuilder()->setLayout('adomin');
    $prsTable = TableRegistry::get('prs');
    $rquestdata=$this->request->getData("prs");

    if(!empty($rquestdata["img"]) && $rquestdata['action']== "send"){
      $file = $rquestdata["img"];
      $rquestdata["img"]='img/primg/' .  $file['name'];
    }

    $prsValidation = $prsTable->newEntity($rquestdata);
    if (
      empty($this->request->getData("prs")) == false &&
      empty($prsValidation->getErrors()) == false
    ) {

      $this->set(compact("prsTable"));

      $errorMessage = "";
      foreach ($prsValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
        }
      }
      echo "<script>";
      echo "alert('" . $errorMessage . "');";
      echo "</script>";
      return;
    }

    if ($rquestdata['action']== "send") {

      if(!empty($rquestdata["img"])){
        move_uploaded_file($file['tmp_name'],$rquestdata["img"] );
      }
      $prsTable->save($prsValidation);
    }
    $this->set(compact("prsTable"));
  }


  public function prup(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(4, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $prsTable=TableRegistry::get('prs');
    if($this->request->getData("prs.action") == "edit" && !empty($this->request->getQuery("prs.id"))){
      echo"更新";
      $editRow = $prsTable->get($this->request->getQuery("prs.id"));
      $editRow->company = $this->request->getData("prs.company");
      $editRow->img = $this->request->getData("prs.img");
      $editRow->url = $this->request->getData("prs.url");
      $editRow->startday = $this->request->getData("prs.startday");
      $editRow->endday = $this->request->getData("prs.endday");
      $editRow->showhide = $this->request->getData("prs.showhide");
      $prsTable->save($editRow);
    }
    $prsTable=TableRegistry::get('prs');
    $prsresult=[];

    if($this->request->getQuery("prs")){
      $this->request->getQuery("prs");
      $prsTable = $prsTable->find()->where(["id"=>$this->request->getQuery("prs.id")])->first();
    }
    $this->set(compact("prsTable"));
  }

//////////////////////////////////////////////////////////////////////////////////////////////////

public function banner(){
  if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(5, explode(",", $this->Auth->user("adomin_no"))) == false) {
    return $this->redirect(['action' => 'index']);
  }
  $this->viewBuilder()->setLayout('adomin');
  $bannersTable=TableRegistry::get('banners');
  $bannersinfo=$bannersTable->find();

  $this->set(compact("bannersTable"));
  $this->set(compact("bannersinfo"));

  if($this->request->getData("banners.action") == "delete"){
    echo"削除";
    $deleteRow = $bannersTable->get($this->request->getData("banners.id"));
    $bannersTable->delete($deleteRow);
  }
}

public function bannerup(){
  if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(5, explode(",", $this->Auth->user("adomin_no"))) == false) {
    return $this->redirect(['action' => 'index']);
  }
  $this->viewBuilder()->setLayout('adomin');
  $bannersTable=TableRegistry::get('banners');

  if($this->request->getData("banners.action") == "edit" && !empty($this->request->getQuery("banners.id"))){
    echo"更新";
    $editRow = $bannersTable->get($this->request->getQuery("banners.id"));
    $editRow->img = $this->request->getData("banners.img");
    $editRow->url = $this->request->getData("banners.url");
    $editRow->endday = $this->request->getData("banners.endday");
    $editRow->startday = $this->request->getData("banners.startday");
    $editRow->showhide = $this->request->getData("banners.showhide");
    $bannersTable->save($editRow);

  }
  $bannersTable=TableRegistry::get('banners');

  $bannersresult=[];

  if($this->request->getQuery("banners")){
    $this->request->getQuery("banners");
    $bannersTable = $bannersTable->find()->where(["id"=>$this->request->getQuery("banners.id")])->first();
  }
  $this->set(compact("bannersTable"));
}


public function bannerin(){
  if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(5, explode(",", $this->Auth->user("adomin_no"))) == false) {
    return $this->redirect(['action' => 'index']);
  }

  $this->viewBuilder()->setLayout('adomin');
  $bannersTable = TableRegistry::get('banners');
  $rquestdata=$this->request->getData("banners");

  if(!empty($rquestdata["img"]) && $rquestdata['action']== "send"){
    echo"test";
    $file = $rquestdata["img"];
    $rquestdata["img"]='img/bannerimg/' .  $file['name'];
  }
  $bannersValidation = $bannersTable->newEntity($rquestdata);

  if (
    empty($this->request->getData("banners")) == false &&
    empty($bannersValidation->getErrors()) == false
  ) {

    $this->set(compact("bannersTable"));
    $errorMessage = "";
    foreach ($bannersValidation->getErrors() as $keyCount => $errorData) {
      foreach ($errorData as $errorType => $error) {
        $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
      }
    }
    echo "<script>";
    echo "alert('" . $errorMessage . "');";
    echo "</script>";
    return;
  }

  if ($rquestdata['action']== "send") {
    echo"登録";
    if(!empty($rquestdata["img"])){
      move_uploaded_file($file['tmp_name'],$rquestdata["img"] );
    }
    $bannersTable->save($bannersValidation);
  }
  $this->set(compact("bannersTable"));
}
/////////////////////////////////////////////////////////////////////////////////////////////////////

public function ranking()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(6, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $ranksTable = TableRegistry::get('ranks');
    $ranksinfo = $ranksTable->find()->orderAsc('ranksNo');
    $this->set(compact("ranksinfo"));
    $this->set(compact("ranksTable"));

    if($this->request->getData("ranks.action") == "delete"){
      $deletetest=$this->request->getData("ranks");
      $entity = $ranksTable->get($deletetest['id']);
      $result = $ranksTable->delete($entity);
    }
  }


  public function rankingin()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(6, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $ranksTable = TableRegistry::get('ranks');
    $this->set(compact("ranksTable"));

    if ($this->request->getData("ranks.action") == "send") {
      $ranksTable = TableRegistry::get('ranks');
      $ranksinfo = $ranksTable->find()->where([
          "ranks.ranksNo <=" =>5,
          "ranks.ranksNo >= "=>1,
          ]);

          $rankinglist=[
            $this->request->getData("ranks.questionId01"),
            $this->request->getData("ranks.questionId02"),
            $this->request->getData("ranks.questionId03"),
            $this->request->getData("ranks.questionId04"),
            $this->request->getData("ranks.questionId05")
          ];
          //0にする
          foreach($ranksinfo as $Rowcount => $Rowdata){
              $editRow = $ranksTable->get($Rowdata->id);
              $editRow->ranksNo = 0;
              $ranksTable->save($editRow);
          }

          //並び替え
          foreach($rankinglist as $Rowcount => $Rowdata){
            $ranksinfo = $ranksTable->find()->where([
              "ranks.questionId" =>  $Rowdata
              ])->first();

          if(!empty($ranksinfo)){
            $editRow = $ranksTable->get($ranksinfo["id"]);
            $editRow->ranksNo = $Rowcount+1;
            $ranksTable->save($editRow);
            }else{
              $ranksValidation = $ranksTable->newEntity([
                'questionId'=>$Rowdata,
                'ranksNo'=>$Rowcount+1
              ]);
              $ranksTable->save($ranksValidation);
            }

          }
        }
      }


      public function rankingup() {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(6, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }

    $this->viewBuilder()->setLayout('adomin');
    $ranksTable=TableRegistry::get('ranks');

    if($this->request->getData("ranks.action") == "edit" && !empty($this->request->getQuery("ranks.id"))){
      echo"更新";
      $editRow = $ranksTable->get($this->request->getQuery("ranks.id"));
      $editRow->today = $this->request->getData("ranks.today");
      $editRow->title = $this->request->getData("ranks.title");
      $editRow->company = $this->request->getData("ranks.company");
      $editRow->mail = $this->request->getData("ranks.mail");
      $editRow->text = $this->request->getData("ranks.text");
      $ranksTable->save($editRow);
    }
    $ranksTable=TableRegistry::get('ranks');
    $ranksresult=[];
    if($this->request->getQuery("ranks")){
      $this->request->getQuery("ranks");
      $ranksTable = $ranksTable->find()->where(["id"=>$this->request->getQuery("ranks.id")])->first();
    }
    $this->set(compact("ranksTable"));
  }
//////////////////////////////////////////////////////////////////////////////////////////////////////


  public function product()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(7, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $productTable = TableRegistry::get('product');
    $resultproduct = $productTable->find();
     if (empty($this->request->getData("product")) == false && $this->request->getData("product.action") == "delete") {
      $deleteRow = $productTable->get($this->request->getData("product.id"));
      $productTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("product")) == false && $this->request->getQuery("product.action") == "get") {
      $filterProduct = [];
      foreach ($this->request->getQuery("product") as $queryKey => $queryValue) {
        if (empty($queryValue) == true || $queryKey == "action") {
          continue;
        }if($queryKey == "mony"||$queryKey == "initial"){
          array_push($filterProduct, [
            sprintf("%s", $queryKey) => $queryValue
          ]);
        }else{
          array_push($filterProduct, [
            sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
          ]);
        }
      }
      $resultproduct = $productTable->find()->where($filterProduct);
      $this->set(compact("resultproduct", "productTable"));
      return;
    } else {
      $resultproduct = $productTable->find();
      $this->set(compact("resultproduct", "productTable"));
    }
  }


  public function productin(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(7, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
   $this->viewBuilder()->setLayout('adomin');
   $productTable = TableRegistry::get('product');
   $this->set(compact("productTable"));
   $productValidation = $productTable->newEntity($this->request->getData("product"));
   if (
     empty($this->request->getData("product")) == false &&
     empty($productValidation->getErrors()) == false
   ) {
     $this->set(compact("productTable"));
     $errorMessage = "";
     foreach ($productValidation->getErrors() as $keyCount => $errorData) {
       foreach ($errorData as $errorType => $error) {
         $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
       }
     }
     echo "<script>";
     echo "alert('" . $errorMessage . "');";
     echo "</script>";
     return;
   }
   if ($this->request->getData("product.action") == "send") {
     $productTable->save($productValidation);
   }
  }


  public function productup()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(7, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $productTable=TableRegistry::get('product');

    if($this->request->getData("product.action") == "edit" && !empty($this->request->getQuery("product.id"))){
      echo"更新";
      $editRow = $productTable->get($this->request->getQuery("product.id"));
      $editRow->today = $this->request->getData("product.today");
      $editRow->title = $this->request->getData("product.title");
      $editRow->company = $this->request->getData("product.company");
      $editRow->text = $this->request->getData("product.text");
      $editRow->mony = $this->request->getData("product.mony");
      $editRow->initial = $this->request->getData("product.initial");
      $editRow->flee = $this->request->getData("product.flee");
      $editRow->trial = $this->request->getData("product.trial");
      $editRow->major = $this->request->getData("product.major");
      $editRow->middle = $this->request->getData("product.middle");
      $editRow->url = $this->request->getData("product.url");
      $productTable->save($editRow);
    }
    $productTable=TableRegistry::get('product');
    $productresult=[];
    if($this->request->getQuery("product")){
      $this->request->getQuery("product");
      $productTable = $productTable->find()->where(["id"=>$this->request->getQuery("product.id")])->first();
    }
    $this->set(compact("productTable"));
  }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function work()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(8, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $jobTable = TableRegistry::get('job');
    $resultjob = $jobTable->find();

  if (
    empty($this->request->getData("job")) == false &&
    $this->request->getData("job.action") == "send" &&
    empty($jobValidation->getErrors()) == true
  ){
    $jobTable->save($jobValidation);
  }elseif(empty($this->request->getData("job")) == false && $this->request->getData("job.action") == "delete"){
    echo"削除";
    $deleteRow = $jobTable->get($this->request->getData("job.id"));
    $jobTable->delete($deleteRow);
  }

  if (empty($this->request->getQuery("job")) == false && $this->request->getQuery("job.action") == "get") {
    $filterjob = [];
    foreach ($this->request->getQuery("job") as $queryKey => $queryValue) {
      if (empty($queryValue) == true || $queryKey == "action") {
        continue;
      }if($queryKey == "reword"){
        array_push($filterjob, [
          sprintf("%s", $queryKey) => $queryValue
        ]);
      }else{
        array_push($filterjob, [
          sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
        ]);
      }
    }
    $resultjob = $jobTable->find()->where($filterjob);
    $this->set(compact("resultjob", "jobTable"));
    return;
  } else {
    $resultjob = $jobTable->find();
    $this->set(compact("resultjob", "jobTable"));
  }
}


public function workin(){
  if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(8, explode(",", $this->Auth->user("adomin_no"))) == false) {
    return $this->redirect(['action' => 'login']);
  }

  $this->viewBuilder()->setLayout('adomin');
  $jobTable = TableRegistry::get('job');
  $this->set(compact("jobTable"));
  $jobValidation = $jobTable->newEntity($this->request->getData("job"));

  if (
    empty($this->request->getData("job")) == false &&
    empty($jobValidation->getErrors()) == false
  ) {

    $this->set(compact("jobTable"));
    $errorMessage = "";
    foreach ($jobValidation->getErrors() as $keyCount => $errorData) {
      foreach ($errorData as $errorType => $error) {
        $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
      }
    }
    echo "<script>";
    echo "alert('" . $errorMessage . "');";
    echo "</script>";
    return;
  }

  if ($this->request->getData("job.action") == "send") {
    $jobTable->save($jobValidation);
  }
}


public function workup(){
  if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(8, explode(",", $this->Auth->user("adomin_no"))) == false) {
    return $this->redirect(['action' => 'login']);
  }
  $this->viewBuilder()->setLayout('adomin');
  $jobTable=TableRegistry::get('job');

  if($this->request->getData("job.action") == "edit" && !empty($this->request->getQuery("job.id"))){
    echo"更新";
    $editRow = $jobTable->get($this->request->getQuery("job.id"));
    $editRow->today = $this->request->getData("job.today");
    $editRow->title = $this->request->getData("job.title");
    $editRow->company = $this->request->getData("job.company");
    $editRow->mail = $this->request->getData("job.mail");
    $editRow->text = $this->request->getData("job.text");
    $editRow->prefecture = $this->request->getData("job.prefecture");
    $editRow->place = $this->request->getData("job.place");
    $editRow->operation = $this->request->getData("job.operation");
    $editRow->contents = $this->request->getData("job.contents");
    $editRow->reword = $this->request->getData("job.reword");
    $editRow->url = $this->request->getData("job.url");
    $editRow->recruitment = $this->request->getData("job.recruitment");
    $editRow->major = $this->request->getData("job.major");
    $editRow->middle = $this->request->getData("job.middle");
    $jobTable->save($editRow);
  }
  $jobTable=TableRegistry::get('job');
  $jobresult=[];
  if($this->request->getQuery("job")){
    $this->request->getQuery("job");
    $jobTable = $jobTable->find()->where(["id"=>$this->request->getQuery("job.id")])->first();
  }
  $this->set(compact("jobTable"));
}


  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  public function seminar()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(9, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }

    $this->viewBuilder()->setLayout('adomin');
    $seminarTable = TableRegistry::get('seminar');
    $resultseminar = $seminarTable->find();

   if (empty($this->request->getData("seminar")) == false && $this->request->getData("seminar.action") == "delete") {
      $deleteRow = $seminarTable->get($this->request->getData("seminar.id"));
      $seminarTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("seminar")) == false && $this->request->getQuery("seminar.action") == "get") {
      echo"検索";
      $filterseminar = [];
      foreach ($this->request->getQuery("seminar") as $queryKey => $queryValue) {
        if (empty($queryValue) == true || $queryKey == "action") {
          continue;
        }if($queryKey == "cost"){
          array_push($filterseminar, [
            sprintf("%s", $queryKey) => $queryValue
          ]);
        }else{
          array_push($filterseminar, [
            sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
          ]);
        }
      }

      $resultseminar = $seminarTable->find()->where($filterseminar);
      $this->set(compact("resultseminar", "seminarTable"));
      return;
    } else {
      $resultseminar = $seminarTable->find();
      $this->set(compact("resultseminar", "seminarTable"));
    }
  }

  public function seminarin()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(9, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $seminarTable = TableRegistry::get('seminar');
    $this->set(compact("seminarTable"));
    $resultseminar = $seminarTable->find();
   $seminarValidation = $seminarTable->newEntity($this->request->getData("seminar"));

   if (
     empty($this->request->getData("seminar")) == false &&
     empty($seminarValidation->getErrors()) == false
   ) {
     $this->set(compact("seminarTable"));
     $errorMessage = "";
     foreach ($seminarValidation->getErrors() as $keyCount => $errorData) {
       foreach ($errorData as $errorType => $error) {
         $errorMessage = sprintf("%s%s：%s\\n", $errorMessage, $keyCount, $error);
       }
     }
     echo "<script>";
     echo "alert('" . $errorMessage . "');";
     echo "</script>";
     return;
   }
   if ($this->request->getData("seminar.action") == "send") {

     echo "登録";
     $seminarTable->save($seminarValidation);
   }

 }
  public function seminarup()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(9, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    $seminarTable=TableRegistry::get('seminar');

    if($this->request->getData("seminar.action") == "edit" && !empty($this->request->getQuery("seminar.id"))){
      echo"更新";
      $editRow = $seminarTable->get($this->request->getQuery("seminar.id"));
      $editRow->today = $this->request->getData("seminar.today");
      $editRow->title = $this->request->getData("seminar.title");
      $editRow->company = $this->request->getData("seminar.company");
      $editRow->mail = $this->request->getData("seminar.mail");
      $editRow->text = $this->request->getData("seminar.text");
      $editRow->prefecture = $this->request->getData("seminar.prefecture");
      $editRow->eria = $this->request->getData("seminar.eria");
      $editRow->date = $this->request->getData("seminar.date");
      $editRow->contents = $this->request->getData("seminar.contents");
      $editRow->cost = $this->request->getData("seminar.cost");
      $editRow->url = $this->request->getData("seminar.url");
      $editRow->major = $this->request->getData("seminar.major");
      $editRow->middle = $this->request->getData("seminar.middle");
      $seminarTable->save($editRow);
    }

    $seminarTable=TableRegistry::get('seminar');
    $seminarresult=[];
    if($this->request->getQuery("seminar")){
      $this->request->getQuery("seminar");
      $seminarTable = $seminarTable->find()->where(["id"=>$this->request->getQuery("seminar.id")])->first();
    }
    $this->set(compact("seminarTable"));
  }

  /////////////////////////////////////////////////////////////////////////////////////////

public function delete() {
  if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(10, explode(",", $this->Auth->user("adomin_no"))) == false) {
    return $this->redirect(['action' => 'login']);
  }
  $this->viewBuilder()->setLayout('adomin');

  //質問
  $questionTable = TableRegistry::get('question');
  $this->set(compact("questionTable"));

  if($this->request->getData("question.action") == "question"){

    $entity = $questionTable->find()->where([
      "id" =>$this->request->getData("question.id")
      ])->first();

      $result = $questionTable->delete($entity);

    }

     //解答
    $answerTable = TableRegistry::get('answer');
    $this->set(compact("answerTable"));
    if($this->request->getData("answer.action") == "answer"){

      $entity = $answerTable->find()->where([
        "id" =>$this->request->getData("answer.id")
        ])->first();

        $result = $answerTable->delete($entity);

      }
  }

///////////////////////////////////////////////////////////////////

  public function login()
  {
    // adomin_log レイアウト利用
    $this->viewBuilder()->setLayout('adomin_log');
    // adomins テーブルを利用

    $adominTable = TableRegistry::get('adomins');
    // adominsTable をビューへ譲渡
    $this->set(compact("adominTable"));
    if (empty($this->request->getData("adomins")) == false) {
      // ログイン情報の POST を受信した場合
      // 入力データでユーザーを検索
      $loginDate = $adominTable->find()->where([
        "id" => intval($this->request->getData("adomins.id")),
        "password" => $this->request->getData("adomins.password")
        ])->first();
        if (empty($loginDate) == false) {
          // 外套のユーザーが存在する場合
          // ログイン情報をセット
          $this->Auth->setUser($loginDate);
          return $this->redirect($this->Auth->redirectUrl());
        }
        // 該当のユーザーが存在しない場合
        $this->Flash->error(__("ユーザーIDまたは、パスワードに誤りがあります。"));
      }
    }
    public function logout(){
     
      $this->request->getSession()->delete("Auth");
      return $this->redirect($this->Auth->logout());


    }



  }
