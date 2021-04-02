<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
//bakuで作ったのちモデルを接続するために必要
use Cake\ORM\TableRegistry;

class ServicesController extends AppController
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
         //１cssを使う
        $this->viewBuilder()->setLayout('ray');
        

    
    }

    public function job()
    {
      
        $this->viewBuilder()->setLayout('ray');
        


    }

    public function learn()
    {
     
        $this->viewBuilder()->setLayout('ray');



    




    }


}
