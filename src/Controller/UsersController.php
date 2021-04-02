<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
//bakeで作ったのちモデルを接続するために必要
use Cake\ORM\TableRegistry;

class UsersController extends AppController
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

    public function index(){
         //１cssを使う
        $this->viewBuilder()->setLayout('ray');
        //２modelを使う
        $usersTable = TableRegistry::get('users');
        //postデータがなければ何もしない
        if(empty($this->request->getData('users'))){
            $this->set(compact("usersTable"));
            return;
        }
        //バリデーションの結果をusersbalidetionに入れる。
        //newEntity()を使うときは基本的に入力してきたデータが正しいか確認するとき
        $usersvalidation = $usersTable->newEntity($this->request->getData());

        /*
        バリデーションの結果を反映するため「$sendTable」のモデルへ上書き
        「$sendTable」をテンプレートに渡したのち、コントローラーの処理を終了
        */
        $usersTable = $usersvalidation;
        $this->set(compact("usersTable"));
        /*
        バリデーション(データの入力確認)を実施する
        エラーがあるようなら何もしない
        エラーメッセージがテンプレートに渡される
        エラーがなければ check へリダイレクトされる
        */
        //問題があればエラー表示
        if ($usersvalidation->getErrors()) {
            return;
        } else {

        //バリデーションに問題がなければSESSIONにいれconformへ移動する
          $this->request->getSession()->write('users', $this->request->getData('users'));
           return $this->redirect(['action' => 'conform']);
        }




 //11/５
//テンプレートの入力項目を変更
//conformから




    }

    public function conform()
    {

        //css
        $this->viewBuilder()->setLayout('ray');

        $usersTable = TableRegistry::get('users');


        //postがあったらバリデーションをかける//conformsubmitがあるか
        if(!empty($this->request->getData("users.conformsubmit"))){
            //  sessionを作成し
            $usersvalidation = $usersTable->newEntity($this->request->session()->read());
             //エラーがあったらindexへ移動
                if($usersvalidation->getErrors()) {
                  return $this->redirect(['action' => 'index']);
                 }else{
                     //db書き込み処理

                     $usersTable->save($usersvalidation);
                    return $this->redirect(['action' => 'thanks']);

                 }
         }



        //SESSIONデータがなければindexへ移動する
        if ($this->request->session()->check("users")) {
           //あれば何もしない
            return ;

        }else{
             //問題があればindexへ移動する。
            $this->redirect(['action' => 'index']);
        }



    }

    public function thanks()
    {

        $this->viewBuilder()->setLayout('ray');




    }
public function login()
    {

        $this->viewBuilder()->setLayout('ray');
















    }

    public function freelance()
    {



    }









    public function home()
    {

        $this->viewBuilder()->setLayout('ray');



    }



}
