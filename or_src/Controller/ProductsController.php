<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
//bakuで作ったのちモデルを接続するために必要
use Cake\ORM\TableRegistry;

class ProductsController extends AppController
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

        $this->viewBuilder()->setLayout('raycp');
     
      
        $productTable = TableRegistry::get('products');

         if (empty($this->request->getQuery("product")) == false && $this->request->getQuery("product.action") == "get") {
      

             $filterproduct = [];
             foreach ($this->request->getQuery("product") as $queryKey => $queryValue) {
               // GETデータをループ 空欄の場合 条件設定しない
               if (empty($queryValue) == true || $queryKey == "action") {
                 continue;
               }
               array_push($filterproduct, [
                 sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
               ]);
             }
             // adominsテーブルを検索(絞り込み)
             $productinfo = $productTable->find()->where($filterproduct);
             // ビューに $resultadomins $adominTable を送信
             $this->set(compact("productinfo", "productTable"));
             return;
           } else {
             // adominssテーブルを検索
             $productinfo = $productTable->find();
             // ビューに $resultadomins $adominTable を送信
             $this->set(compact("productinfo", "productTable"));
           }




















 


    }

 


























    public function works() {
     
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
        $prsTable = TableRegistry::get('prs');
       
        $prsinfo = $prsTable->find()->where([
        "showhide"=>"公開",
        "startday <= "=>date('Y-m-d'),
        "endday >= "=>date('Y-m-d'),
        ]);




        $this->set(compact("prsinfo"));
        $jobsTable = TableRegistry::get('jobs');
          //print_r($this->request->getQuery("jobs"));
        if (empty($this->request->getQuery("jobs")) == false && $this->request->getQuery("jobs.action") == "get") {
            // クエリ文字が存在する場合 絞り込み検索をする
            $filterjobs = [];
            foreach ($this->request->getQuery("jobs") as $queryKey => $queryValue) {
              // GETデータをループ 空欄の場合 条件設定しない
              if (empty($queryValue) == true || $queryKey == "action") {
                continue;
              }
              array_push($filterjobs, [
                sprintf("%s LIKE", $queryKey) => "%" . $queryValue . "%"
              ]);
            }
            // adominsテーブルを検索(絞り込み)
            $jobsinfo = $jobsTable->find()->where($filterjobs);
            // ビューに $resultadomins $adominTable を送信
            $this->set(compact("jobsinfo", "jobsTable"));
            return;
          } else {
            // adominssテーブルを検索
            $jobsinfo = $jobsTable->find();
            // ビューに $resultadomins $adominTable を送信
            $this->set(compact("jobsinfo", "jobsTable"));
          }

     

        //項目
       
        //$jobsinfo = $jobsTable->find();
       // $this->set(compact("jobsinfo"));
        

          





    }
    public function worksentry(){
     
        $this->viewBuilder()->setLayout('raycp');
        $appTable = TableRegistry::get('app_users');
        $this->set(compact("appTable"));
        if(empty($this->request->getData('app'))){
            $this->set(compact("appTable"));
            return;
        }

        $appvalidation = $appTable->newEntity($this->request->getData());


        if ($appvalidation->getErrors()) {
          
          echo"era-";
            return;
        } else {

        //バリデーションに問題がなければSESSIONにいれconformへ移動する
          $this->request->getSession()->write('app_users', $this->request->getData('app'));
           return $this->redirect(['action' => 'workscheck']);
        }












    }
    public function workscheck(){
     
        $this->viewBuilder()->setLayout('raycp');

        $appTable = TableRegistry::get('app_users');


        //postがあったらバリデーションをかける//conformsubmitがあるか
        if(!empty($this->request->getData("app_users.appsubmit"))){
            //  sessionを作成し
            $appvalidation = $appTable->newEntity($this->request->session()->read());
             //エラーがあったらindexへ移動
                if($appvalidation->getErrors()) {
                  return $this->redirect(['action' => 'worksentry']);
                 }else{
                     //db書き込み処理

                     $appTable->save($appvalidation);
                    return $this->redirect(['action' => 'worksend']);

                 }
                 print_r($appvalidation->getErrors());
         }

        if ($this->request->session()->check("app_users")) {
           //あれば何もしない
            return ;

        }else{
             //問題があればindexへ移動する。
            $this->redirect(['action' => 'worksentry']);
        }
















    }
    public function worksend() {
        $this->viewBuilder()->setLayout('raycp');


    }





    
    public function seminar() {
     
        $this->viewBuilder()->setLayout('ray');


        $seminarsTable = TableRegistry::get('seminars');

        $seminarsinfo = $seminarsTable->find();
        $this->set(compact("seminarsinfo"));
        $this->set(compact("seminarsTable"));

















    }



}
