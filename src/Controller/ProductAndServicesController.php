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
     'limit' => 10,
       
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
//作業
$ranksTable = TableRegistry::get('question');
$ranksinfo = $ranksTable->find()->where([
    "ranks.ranksNo <=" =>5,
    "ranks.ranksNo >= "=>1,
    ])
->join([
    'table' => 'ranks',
    'alias' => 'ranks',
    'type' => 'INNER',
    'conditions' => 'ranks.questionId = question.id',

])->select([
    'ranksNo' => 'ranks.ranksNo',
    'question' => 'question.question',
    'hash' => 'question.hash',
  
])->order(['ranks.ranksNo' => 'ASC']);

$this->set(compact("ranksinfo"));
$productlikeTable = TableRegistry::get('product_like');
$likes = $productlikeTable->find()->where([ 
  "user_id"=>$this->request->getSession()->read('Auth.id')
]);

$likes_info=[];

foreach($likes as$key=>$row){
 array_push($likes_info, $row["product_id"]);
 
}
$this->set(compact("likes_info"));
  }


 


  public function like(){
   
    $productlikeTable = TableRegistry::get('product_like');

    $productlikeValidation = $productlikeTable->newEntity([
      "user_id"=>$this->request->getSession()->read('Auth.id'),
      "product_id"=>$this->request->getParam('id'),
      "created"=>date('Y-m-d H:i:s')
     
    ]);

    if (empty($productlikeValidation->getErrors())) {
      //バリデーション
      $productlikeTable->save($productlikeValidation);
    }
    
    print_r($productlikeValidation->getErrors());
    return $this->response->withType('json')
    ->withStringBody(json_encode([]));

  }


}