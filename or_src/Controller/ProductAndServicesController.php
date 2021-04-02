<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ProductAndServicesController extends AppController
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
        //$this->loadComponent('Security');
       $this->loadComponent('Authentication.Authentication');
    }

    public function index()
    {


 //写真
 $prTable = TableRegistry::get('prs');
    
 $prinfo = $prTable->find()->where([
 "showhide"=>"公開",
 "startday <= "=>date('Y-m-d'),
 "endday >= "=>date('Y-m-d'),
 ]);
 $this->set(compact("prinfo"));



      $productTable = TableRegistry::get('product');

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
          // $productinfo = $productTable->find()->where($filterproduct);
           // ビューに $resultadomins $adominTable を送信
         //  $this->set(compact("productinfo", "productTable"));
         $this->set('productinfo', $this->paginate($productTable->find()->where($filterproduct)->orderDesc('id')));
           return;
         } else {
           // adominssテーブルを検索
         //  $productinfo = $productTable->find();
           // ビューに $resultadomins $adominTable を送信
          // $this->set(compact("productinfo", "productTable"));
          $this->set('productinfo', $this->paginate($productTable->find()->orderDesc('id')));
          }



  }




}