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

  public function index()
  {
    
    //CSS
    $this->viewBuilder()->setLayout('adomin');

    $userTable = TableRegistry::get('user');
    //表示
    $resultuser = $userTable->find();

    // バリデーション
    $userValidation = $userTable->newEntity($this->request->getData("user"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
    if (
      empty($this->request->getData("user")) == false &&
      empty($userValidation->getErrors()) == false
    ) {
      // ビューへ
      $this->set(compact("resultuser", "userTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($userValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }
      $this->Flash->error($errorMessage, ['escape' => false]);
      return;
    }

    if (empty($this->request->getData("user")) == false && $this->request->getData("user.action") == "delete") {
      // POSTデータにて action が delete の場合 データを削除
      $deleteRow = $userTable->get($this->request->getData("user.id"));
      $userTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("user")) == false && $this->request->getQuery("user.action") == "get") {
      // クエリ文字が存在する場合 絞り込み検索をする
      $filteruser = [];
      foreach ($this->request->getQuery("user") as $queryKey => $queryValue) {
        // GETデータをループ 空欄の場合 条件設定しない
        if (empty($queryValue) == true || $queryKey == "action") {
          continue;
        }
        array_push($filteruser, [
          sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
        ]);
      }
      // adominsテーブルを検索(絞り込み)
      $resultuser = $userTable->find()->where($filteruser);
      // ビューへ
      $this->set(compact("resultuser", "userTable"));
      return;
    } else {
      // adominssテーブルを検索
      $resultuser = $userTable->find();
      // ビューへ
      $this->set(compact("resultuser", "userTable"));
    }
  }

  public function indexin(){
    //CSS
    $this->viewBuilder()->setLayout('adomin');

    $userTable = TableRegistry::get('user');


    $this->set(compact("userTable"));

    $userValidation = $userTable->newEntity($this->request->getData("user"));


    if (
      empty($this->request->getData("user")) == false &&
      empty($userValidation->getErrors()) == false
    ) {

      $this->set(compact("resultuser", "userTable"));

      // エラーメッセージを設定
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
      //バリデーション
print_r($userValidation->getErrors());
      echo "登録";

      $userTable->save($userValidation);
    }

  }

  public function indexup(){
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





  public function adomin()
  {
    

    // レイアウト ray を設定
    $this->viewBuilder()->setLayout('adomin');
    // テーブル adomins を設定
    $adominTable = TableRegistry::get("adomins");
    // adominsテーブルを検索
    $resultadomins = $adominTable->find();

    // 入力データのバリデーション
    $adominValidation = $adominTable->newEntity($this->request->getData("adomins"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
    if (
      empty($this->request->getData("adomins")) == false &&
      empty($adominValidation->getErrors()) == false
    ) {
      // ビューに $resultadomins $adominTable を送信
      $this->set(compact("resultadomins", "adominTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($adominValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }
      $this->Flash->error($errorMessage, ['escape' => false]);
      return;
    }

    if (empty($this->request->getData("adomins")) == false && $this->request->getData("adomins.action") == "delete") {
      // POSTデータにて action が delete の場合 データを削除
      $deleteRow = $adominTable->get($this->request->getData("adomins.id"));
      $adominTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("adomins")) == false && $this->request->getQuery("adomins.action") == "get") {
      // クエリ文字が存在する場合 絞り込み検索をする
      $filterAdomins = [];
      foreach ($this->request->getQuery("adomins") as $queryKey => $queryValue) {
        // GETデータをループ 空欄の場合 条件設定しない
        if (empty($queryValue) == true || $queryKey == "action") {
          continue;
        }
        array_push($filterAdomins, [
          sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
        ]);
      }
      // adominsテーブルを検索(絞り込み)
      $resultadomins = $adominTable->find()->where($filterAdomins);
      // ビューに $resultadomins $adominTable を送信
      $this->set(compact("resultadomins", "adominTable"));
      return;
    } else {
      // adominssテーブルを検索
      $resultadomins = $adominTable->find();
      // ビューに $resultadomins $adominTable を送信
      $this->set(compact("resultadomins", "adominTable"));
    }
  }
  public function adominin(){
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(2, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }

    // レイアウト ray を設定
    $this->viewBuilder()->setLayout('adomin');
    // テーブル adomins を設定
    $adominTable = TableRegistry::get("adomins");
    // adominsテーブルを検索
    $resultadomins = $adominTable->find();

    // 入力データのバリデーション
    $adominValidation = $adominTable->newEntity($this->request->getData("adomins"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
    if (
      empty($this->request->getData("adomins")) == false &&
      empty($adominValidation->getErrors()) == false
    ) {
      // ビューに $resultadomins $adominTable を送信
      $this->set(compact("resultadomins", "adominTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($adominValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }
      $this->Flash->error($errorMessage, ['escape' => false]);
      return;
    }

    if (
      empty($this->request->getData("adomins")) == false &&
      $this->request->getData("adomins.action") == "send" &&
      empty($adominValidation->getErrors()) == true
    ) {
      // POSTデータにて action が insert の場合 データを挿入
      $adominTable->save($adominValidation);
    } 

    
  }
  public function adominup(){
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
  public function seminar()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(6, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    // レイアウト ray を設定
    $this->viewBuilder()->setLayout('adomin');
    // テーブル products を設定
    $seminarTable = TableRegistry::get('seminar');
    // productsテーブルを検索
    $resultseminar = $seminarTable->find();

    // 入力データのバリデーション
    $seminarValidation = $seminarTable->newEntity($this->request->getData("seminar"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
    if (
      empty($this->request->getData("seminar")) == false &&
      empty($seminarValidation->getErrors()) == false
    ) {
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultseminar", "seminarTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($seminarValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }

      echo"<script>";
      echo"alert('".$errorMessage."');";
      echo"</script>";
      return;
    }

    if (
      empty($this->request->getData("seminar")) == false &&
      $this->request->getData("seminar.action") == "send" &&
      empty($seminarValidation->getErrors()) == true
    ) {
      // POSTデータにて action が insert の場合 データを挿入
      $seminarTable->save($seminarValidation);

    } elseif (empty($this->request->getData("seminar")) == false && $this->request->getData("seminar.action") == "delete") {
      // POSTデータにて action が delete の場合 データを削除
      $deleteRow = $seminarTable->get($this->request->getData("seminar.id"));
      $seminarTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("seminar")) == false && $this->request->getQuery("seminar.action") == "get") {
      // クエリ文字が存在する場合 絞り込み検索をする
      echo"検索";
      $filterseminar = [];
      foreach ($this->request->getQuery("seminar") as $queryKey => $queryValue) {
        // GETデータをループ 空欄の場合 条件設定しない
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

      // productsテーブルを検索(絞り込み)
      $resultseminar = $seminarTable->find()->where($filterseminar);
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultseminar", "seminarTable"));
      return;
    } else {
      // productsテーブルを検索
      $resultseminar = $seminarTable->find();
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultseminar", "seminarTable"));
    }
  }



  public function seminarin()
  {
    // レイアウト ray を設定
    $this->viewBuilder()->setLayout('adomin');
    // テーブル products を設定
    $seminarTable = TableRegistry::get('seminar');
    // productsテーブルを検索
    $resultseminar = $seminarTable->find();

    // 入力データのバリデーション
    $seminarValidation = $seminarTable->newEntity($this->request->getData("seminar"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
    if (
      empty($this->request->getData("seminar")) == false &&
      empty($seminarValidation->getErrors()) == false
    ) {
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultseminar", "seminarTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($seminarValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }

      echo"<script>";
      echo"alert('".$errorMessage."');";
      echo"</script>";
      return;
    }

    if (
      empty($this->request->getData("seminar")) == false &&
      $this->request->getData("seminar.action") == "send" &&
      empty($seminarValidation->getErrors()) == true
    ) {
      // POSTデータにて action が insert の場合 データを挿入
      $seminarTable->save($seminarValidation);
    }  elseif (empty($this->request->getData("seminar")) == false && $this->request->getData("seminar.action") == "delete") {
      // POSTデータにて action が delete の場合 データを削除
      $deleteRow = $seminarTable->get($this->request->getData("seminar.id"));
      $seminarTable->delete($deleteRow);
    }




  }

  public function seminarup()
  {
    $this->viewBuilder()->setLayout('adomin');
    $seminarTable=TableRegistry::get('seminar');

    if($this->request->getData("seminar.action") == "edit" && !empty($this->request->getQuery("seminar.id"))){
      echo"更新";
      $editRow = $seminarTable->get($this->request->getQuery("seminar.id"));
      $editRow->today = $this->request->getData("seminar.today");
      $editRow->title = $this->request->getData("seminar.title");
      $editRow->company = $this->request->getData("seminar.company");
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



  ////////////////////////////////////////////////////////////////////////////////////











  public function ranking()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(7, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    //css
    $this->viewBuilder()->setLayout('adomin');
    //teble
    $ranksTable = TableRegistry::get('rank');

    //表示
    $ranksinfo = $ranksTable->find();

    $this->set(compact("ranksinfo"));


    $this->set(compact("ranksTable"));
    //登録
    if ($this->request->getData("ranks.action") == "send") {
      $test = $this->request->getData("ranks");
     
      $ranksvalidation = $ranksTable->newEntity($test);
      $ranksTable->save($ranksvalidation);

    }//更新
    elseif($this->request->getData("ranks.action") == "edit"){
      echo"更新";
      $editRow = $ranksTable->get($this->request->getQuery("ranks.id"));
      $editRow->no1 = $this->request->getData("ranks.no1");
      $editRow->no2 = $this->request->getData("ranks.no2");
      $editRow->no3 = $this->request->getData("ranks.no3");
      $editRow->no4 = $this->request->getData("ranks.no4");
      $editRow->no5 = $this->request->getData("ranks.no5");
      $ranksTable->save($editRow);

    }//削除
    elseif($this->request->getData("ranks.action") == "delete"){

      $deletetest=$this->request->getData("ranks");
      $entity = $ranksTable->get($deletetest['id']);
      $result = $ranksTable->delete($entity);

    }else{

    }



  }
  public function rankingin()
  {
    $this->viewBuilder()->setLayout('adomin');
    //teble
    $ranksTable = TableRegistry::get('ranks');
  }


  public function rankingup()
  {
    $this->viewBuilder()->setLayout('adomin');
    //teble
    $ranksTable = TableRegistry::get('ranks');
  }

  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  public function product()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(3, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    // レイアウト ray を設定
    $this->viewBuilder()->setLayout('adomin');
    // テーブル products を設定
    $productTable = TableRegistry::get('product');
    // productsテーブルを検索
    $resultproduct = $productTable->find();

    // 入力データのバリデーション
    $productValidation = $productTable->newEntity($this->request->getData("product"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
    if (
      empty($this->request->getData("product")) == false &&
      empty($productValidation->getErrors()) == false
    ) {
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultproduct", "productTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($productValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }

      echo"<script>";
      echo"alert('".$errorMessage."');";
      echo"</script>";
      return;
    }

     if (empty($this->request->getData("product")) == false && $this->request->getData("product.action") == "delete") {
      // POSTデータにて action が delete の場合 データを削除
      $deleteRow = $productTable->get($this->request->getData("product.id"));
      $productTable->delete($deleteRow);
    }

    if (empty($this->request->getQuery("product")) == false && $this->request->getQuery("product.action") == "get") {
      // クエリ文字が存在する場合 絞り込み検索をする
      $filterProduct = [];
      foreach ($this->request->getQuery("product") as $queryKey => $queryValue) {
        // GETデータをループ 空欄の場合 条件設定しない
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
      // productsテーブルを検索(絞り込み)
      $resultproduct = $productTable->find()->where($filterProduct);
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultproduct", "productTable"));
      return;
    } else {
      // productsテーブルを検索
      $resultproduct = $productTable->find();
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultproduct", "productTable"));
    }
  }




  public function productin()
  {

    $this->viewBuilder()->setLayout('adomin');
    // テーブル products を設定
    $productTable = TableRegistry::get('product');
    // productsテーブルを検索
    $resultproduct = $productTable->find();

    // 入力データのバリデーション
    $productValidation = $productTable->newEntity($this->request->getData("product"));
    // POSTデータがあり バリデーション結果に不備がある いずれか場合にはエラーを表示する
   
    if (
      empty($this->request->getData("product")) == false &&
      empty($productValidation->getErrors()) == false
    ) {
      // ビューに $resultproducts $productTable を送信
      $this->set(compact("resultproduct", "productTable"));

      // エラーメッセージを設定
      $errorMessage = "";
      foreach ($productValidation->getErrors() as $keyCount => $errorData) {
        foreach ($errorData as $errorType => $error) {
          $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
        }
      }

      echo"<script>";
      echo"alert('".$errorMessage."');";
      echo"</script>";
      return;
    }

    if (
      empty($this->request->getData("product")) == false &&
      $this->request->getData("product.action") == "send" &&
      empty($productValidation->getErrors()) == true
    ) {
      // POSTデータにて action が send の場合 データを挿入
      $productTable->save($productValidation);
    }


  }

  public function productup()
  {
    $this->viewBuilder()->setLayout('adomin');
    $productTable=TableRegistry::get('product');

    if($this->request->getData("product.action") == "edit" && !empty($this->request->getQuery("product.id"))){
      echo"更新";
      // POSTデータにて action が edit の場合 データを更新
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















  /////////////////////////////////////////////////////////////////////////////////////////
  public function pr()
  {
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(8, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'index']);
    }
    $this->viewBuilder()->setLayout('adomin');
    //表示
    $prsTable = TableRegistry::get('prs');


    //画像
    //データベースエラー
    $rquestdata=$this->request->getData("prs");

    if(!empty($rquestdata["img"]) && $rquestdata['action']== "send"){
      $file = $rquestdata["img"]; //受け取り
      $rquestdata["img"]='img/primg/' .  $file['name'];
    }
    // 入力データのバリデーション
    $prsValidation = $prsTable->newEntity($rquestdata);
    //登録
    print_r($prsValidation->getErrors());
    if ($rquestdata['action']== "send") {

      if(!empty($rquestdata["img"])){


        move_uploaded_file($file['tmp_name'],$rquestdata["img"] );
        print_r($prsValidation);
      }
      // POSTデータにて action が insert の場合 データを挿入
      $prsTable->save($prsValidation);

    }//削除
    elseif ($rquestdata["action"] == "delete") {
      echo "削除";

      $deleteRow = $prsTable->get($rquestdata["id"]);
      $prsTable->delete($deleteRow);
    } 
    $prsinfo = $prsTable->find();

    $this->set(compact("prsinfo"));
    $this->set(compact("prsTable"));
  }


  public function prin(){

    $this->viewBuilder()->setLayout('adomin');
    //表示
    $prsTable = TableRegistry::get('prs');


    //画像
    //データベースエラー
    $rquestdata=$this->request->getData("prs");

    if(!empty($rquestdata["img"]) && $rquestdata['action']== "send"){
      $file = $rquestdata["img"]; //受け取り
      $rquestdata["img"]='img/primg/' .  $file['name'];
    }
    // 入力データのバリデーション
    $prsValidation = $prsTable->newEntity($rquestdata);
    //登録
    print_r($prsValidation->getErrors());
    if ($rquestdata['action']== "send") {

      if(!empty($rquestdata["img"])){


        move_uploaded_file($file['tmp_name'],$rquestdata["img"] );
        print_r($prsValidation);
      }
      // POSTデータにて action が insert の場合 データを挿入
      $prsTable->save($prsValidation);

    }

    $this->set(compact("prsinfo"));
    $this->set(compact("prsTable"));
  }


  public function prup(){
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

  ////////////////////////////////////////////////////////////////////
  public function banner(){
    $this->viewBuilder()->setLayout('adomin');
    //表示

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
    $this->viewBuilder()->setLayout('adomin');
    //表示
    $bannersTable = TableRegistry::get('banners');


    //画像
    //データベースエラー
    $rquestdata=$this->request->getData("banners");

    if(!empty($rquestdata["img"]) && $rquestdata['action']== "send"){
      echo"test";
      $file = $rquestdata["img"]; //受け取り
      $rquestdata["img"]='img/bannerimg/' .  $file['name'];

    }
    // 入力データのバリデーション
    $bannersValidation = $bannersTable->newEntity($rquestdata);
    //登録
    print_r($bannersValidation->getErrors());
    if ($rquestdata['action']== "send") {
      echo"登録";

      if(!empty($rquestdata["img"])){


        move_uploaded_file($file['tmp_name'],$rquestdata["img"] );

      }
      print_r($bannersValidation);
      // POSTデータにて action が insert の場合 データを挿入
      $bannersTable->save($bannersValidation);

    }//削除

    $this->set(compact("bannersinfo"));
    $this->set(compact("bannersTable"));
  }


  //////////////////////////////////////////////////////////////////////////////////



  public function work()
  {
    //配列にあるかinarray
    if (in_array(1, explode(",", $this->Auth->user("adomin_no"))) == false && in_array(4, explode(",", $this->Auth->user("adomin_no"))) == false) {
      return $this->redirect(['action' => 'login']);
    }
    $this->viewBuilder()->setLayout('adomin');

    $jobTable = TableRegistry::get('job');
    $resultjob = $jobTable->find();


    //バリデーション
    $jobValidation = $jobTable->newEntity($this->request->getData("job"));

    //検索
    if (empty($this->request->getQuery("job")) == false &&
    empty($jobValidation->getErrors()) == false
  ) {
    $this->set(compact("resultjob", "jobTable"));
    // エラーメッセージを設定
    $errorMessage = "";
    foreach ($jobValidation->getErrors() as $keyCount => $errorData) {
      foreach ($errorData as $errorType => $error) {
        $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
      }
    }

    echo"<script>";
    echo"alert('".$errorMessage."');";
    echo"</script>";
    return;
  }


  //登録
  if (
    empty($this->request->getData("job")) == false &&
    $this->request->getData("job.action") == "send" &&
    empty($jobValidation->getErrors()) == true
  ){
    //バリデーション

    $jobTable->save($jobValidation);

  }elseif(empty($this->request->getData("job")) == false && $this->request->getData("job.action") == "delete"){
    echo"削除";
    $deleteRow = $jobTable->get($this->request->getData("job.id"));
    $jobTable->delete($deleteRow);

  }


  if (empty($this->request->getQuery("job")) == false && $this->request->getQuery("job.action") == "get") {
    // クエリ文字が存在する場合 絞り込み検索をする
    $filterjob = [];
    foreach ($this->request->getQuery("job") as $queryKey => $queryValue) {
      // GETデータをループ 空欄の場合 条件設定しない
      if (empty($queryValue) == true || $queryKey == "action") {
        continue;
        //または
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

    // productsテーブルを検索(絞り込み)
    $resultjob = $jobTable->find()->where($filterjob);
    // ビューに $resultproducts $productTable を送信
    $this->set(compact("resultjob", "jobTable"));
    return;
  } else {
    // productsテーブルを検索
    $resultjob = $jobTable->find();
    // ビューに $resultproducts $productTable を送信
    $this->set(compact("resultjob", "jobTable"));
  }
}
public function workin()
{
  $this->viewBuilder()->setLayout('adomin');

  $jobTable = TableRegistry::get('job');
  $resultjob = $jobTable->find();


  //バリデーション
  $jobValidation = $jobTable->newEntity($this->request->getData("job"));

  //検索
  if (empty($this->request->getQuery("job")) == false &&
  empty($jobValidation->getErrors()) == false
) {
  $this->set(compact("resultjob", "jobTable"));
  // エラーメッセージを設定
  $errorMessage = "";
  foreach ($jobValidation->getErrors() as $keyCount => $errorData) {
    foreach ($errorData as $errorType => $error) {
      $errorMessage = sprintf("%s<br/>%s：%s", $errorMessage, $keyCount, $error);
    }
  }

  echo"<script>";
  echo"alert('".$errorMessage."');";
  echo"</script>";
  return;
}


//登録
if (
  empty($this->request->getData("job")) == false &&
  $this->request->getData("job.action") == "send" &&
  empty($jobValidation->getErrors()) == true
){
  //バリデーション

  $jobTable->save($jobValidation);

}elseif($this->request->getData("job.action") == "delete"){

  $deleteRow = $jobTable->get($this->request->getQuery("job.id"));
  $jobTable->delete($deleteRow);

}


if (empty($this->request->getQuery("job")) == false && $this->request->getQuery("job.action") == "get") {
  // クエリ文字が存在する場合 絞り込み検索をする
  $filterjob = [];
  foreach ($this->request->getQuery("job") as $queryKey => $queryValue) {
    // GETデータをループ 空欄の場合 条件設定しない
    if (empty($queryValue) == true || $queryKey == "action") {
      continue;
      //または
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

  // productsテーブルを検索(絞り込み)
  $resultjob = $jobTable->find()->where($filterjob);
  // ビューに $resultproducts $productTable を送信
  $this->set(compact("resultjob", "jobTable"));
  return;
} else {
  // productsテーブルを検索
  $resultjob = $jobTable->find();
  // ビューに $resultproducts $productTable を送信
  $this->set(compact("resultjob", "jobTable"));
}

}
public function workup()
{
  $this->viewBuilder()->setLayout('adomin');
  $jobTable=TableRegistry::get('job');

  if($this->request->getData("job.action") == "edit" && !empty($this->request->getQuery("job.id"))){
    echo"更新";
    $editRow = $jobTable->get($this->request->getQuery("job.id"));

    $editRow->today = $this->request->getData("job.today");
    $editRow->title = $this->request->getData("job.title");
    $editRow->company = $this->request->getData("job.company");
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

public function delete() {

  $this->viewBuilder()->setLayout('adomin');
  //２modelを使う
  $deleteTable = TableRegistry::get('questions');
  $answerTable = TableRegistry::get('responss');
  //変数を送る
  $this->set(compact("deleteTable"));
  $this->set(compact("answerTable"));

  if($this->request->getData("questions.action") == "question"){


    $entity = $deleteTable->find()->where([
      "question_id" =>$this->request->getData("questions.question_id")
      ])->first();



      $result = $deleteTable->delete($entity);



    }












  }
















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
        // 外套のユーザーが存在しない場合
        $this->Flash->error(__("ユーザーIDまたは、パスワードに誤りがあります。"));
      }
    }
  }
