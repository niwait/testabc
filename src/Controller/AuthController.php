<?php

namespace App\Controller;

use App\Form\RegisterForm;
use App\Form\RegisterVerificationForm;
use App\Model\Entity\User;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;
use Ramsey\Uuid\Uuid;

class AuthController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login', 'register', 'registerReview', 'registerSuccess', 'registerVerification', 'registerVerificationReview', 'registerVerificationSuccess']);
    }

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
    public function registerVerification()
    {
        $form = new RegisterVerificationForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $this->request->getSession()->write('register_verification_data', json_encode($this->request->getData()));
                return $this->redirect('/register/verification/review');
            } else {
                $this->Flash->error('入力された値が正しくありません。ご確認ください。');
            }
        } else {
            if ($this->request->getSession()->check('register_verification_data')) {
                $data = json_decode($this->request->getSession()->read('register_verification_data'));
                $form->setData([
                    'email' => $data->email,
                    'email_repeat' => $data->email_repeat
                ]);
            }
        }
        $this->set('form', $form);
    }

    public function registerVerificationReview()
    {
 
        if ($this->request->getSession()->check('register_verification_data') === false) {
            $this->redirect('/register/verification');
        }
        $data = json_decode($this->request->getSession()->read('register_verification_data'));
        if ($this->request->is('post')) {
            /**
             * @var User $user
             */
            $createdAt = new \DateTime();
            $verificationTable = TableRegistry::getTableLocator()->get('Verification');
            $verification = $verificationTable->newEntity();
            $verification->code = Uuid::uuid4();
            $verification->email = strtolower($data->email);
            $verification->created_at = $createdAt->format('Y-m-d H:i:s');
            $verification->expired_at = $createdAt->add(date_interval_create_from_date_string('24 hours'))->format('Y-m-d H:i:s');
            $verificationTable->save($verification);
            $email = new Email('default');
            $email->viewBuilder()->setTemplate('registration')
                ->setVar('code', $verification->code);
            $email
                ->setFrom('info@freeda.work')
                //->setTo('khn.kazmasa@gmail.com')
               ->setTo($verification->email)
                ->setSubject('登録がされていません。')
                ->send();
            $this->request->getSession()->delete('register_verification_data');
            return $this->redirect('/register/verification/success');
        }
        $this->set('data', $data);
    }

    public function registerVerificationSuccess()
    {

    }

    public function register()
    {
        $code = $this->request->getQuery('code');
        $verificationTable = TableRegistry::getTableLocator()->get('Verification');
        $verification = $verificationTable->find()->where(['code' => $code, 'is_verified' => 0])->first();
        if ($verification === null) {
            return $this->redirect('/register/verification');
        }
        $form = new RegisterForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $data = $this->request->getData();
                $data['email'] = $verification->email;
                $data['email_repeat'] = $verification->email;
                $this->request->getSession()->write('register_data', json_encode($data));
                return $this->redirect('/register/review?code=' . $verification->code);
            } else {
                $this->Flash->error('Please check the form errors!');
            }
        } else {
            if ($this->request->getSession()->check('register_data')) {
                $data = json_decode($this->request->getSession()->read('register_data'));
                $form->setData([
                    'nickname' => $data->nickname,
                    'kana' => $data->kana,
                    'name' => $data->name,
                    'position' => $data->position,
                    'position_area' => $data->position_area,
                    'company_name' => $data->company_name,
                    'email' => $verification->email,
                    'email_repeat' => $verification->email,
                    'address' => $data->address,
                    'birth' => $data->birth
                ]);
            }
        }
        $form->setData(['email' => $verification->email, 'email_repeat' => $verification->email]);
        $this->set('form', $form);
        $this->set('code', $verification->code);
    }

    public function registerReview()
    {
        $code = $this->request->getQuery('code');
        $verificationTable = TableRegistry::getTableLocator()->get('Verification');
        $verification = $verificationTable->find()->where(['code' => $code, 'is_verified' => 0])->first();
        if ($verification === null) {
            return $this->redirect('/register/verification');
        }
        if ($this->request->getSession()->check('register_data') === false) {
            $this->redirect('/register?code=' . $verification->code);
        }
        $data = json_decode($this->request->getSession()->read('register_data'));
        if ($this->request->is('post')) {
            /**
             * @var User $user
             */
            $verification->is_verified = 1;
            $verificationTable->save($verification);
            $userTable = TableRegistry::getTableLocator()->get('User');
            $user = $userTable->newEntity();
            $user->name = $data->name;
            $user->kana = $data->kana;
            $user->position = $data->position;
            $user->position_area = $data->position_area;
            $user->nickname = $data->nickname;
            $user->company = $data->company_name;
            $user->email = strtolower($data->email);
            $user->address_region = $data->address;
            $user->birth = $data->birth;
            $user->password = $data->password;
            $user->created_at = date('Y-m-d H:i:s');
            $user->updated_at = date('Y-m-d H:i:s');
            $user->status = 1;
            $userTable->save($user);
            $this->request->getSession()->delete('register_data');
            $this->request->getSession()->write('registered_user_id', $user->id);
            return $this->redirect('/register/success');
        }
        $this->set('data', $data);
        $this->set('code', $verification->code);
    }

    public function registerSuccess()
    {
        if ($this->request->getSession()->check('registered_user_id') === false) {
            $this->redirect('/register');
        }
        $this->request->getSession()->delete('registered_user_id');
    }

    public function login()
    {
        $userstatus=2;
        if(!empty($this->request->getData("email"))){
            
           $userTable = TableRegistry::get('user');
            $query =  $userTable->find()->where(
                [
                    'email' => $this->request->getData("email")   
                ]
            )->first();
            $userstatus=$query->status;
        }


        $result = $this->Authentication->getResult();
        if ($result->isValid() &&  $userstatus==1) {
            return $this->redirect('/');
        }else{
            //$this->request->getSession()->delete('Auth');
            $this->Authentication->logout();
        }

        if ($this->request->is('post') && !$result->isValid()) {
            
        }
        
    }


    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect('/login');
    }
}
