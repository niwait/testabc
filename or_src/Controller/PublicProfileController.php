<?php

namespace App\Controller;

use App\Form\MessageForm;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Ramsey\Uuid\Uuid;

class PublicProfileController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['index']);
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

    public function index()
    {
        $nickname = $this->request->getParam('nickname');
        $userTable = TableRegistry::getTableLocator()->get('User');
        $user = $userTable->find()->where(['nickname' => $nickname])->first();
        if ($user === null) {
            return $this->redirect('/');
        }
        $workHistoryTable = TableRegistry::getTableLocator()->get('UserWorkHistory');
        $educationHistoryTable = TableRegistry::getTableLocator()->get('UserEducationHistory');
        $userLinkTable = TableRegistry::getTableLocator()->get('UserLink');
        $this->set('user', $user);
        $this->set('work_histories', $workHistoryTable->find()->where(['user_id' => $user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('education_histories', $educationHistoryTable->find()->where(['user_id' => $user->id])->orderDesc('start_year')->orderDesc('start_month'));
        $this->set('user_links', $userLinkTable->find()->where(['user_id' => $user->id])->orderDesc('type'));
    }

    public function sendMessage()
    {
        $nickname = $this->request->getParam('nickname');
        $userTable = TableRegistry::getTableLocator()->get('User');
        $user = $userTable->find()->where(['nickname' => $nickname])->first();
        if ($user == null || $user->id === $this->request->getAttribute('identity')->id) {
            return $this->redirect('/');
        }
        $form = new MessageForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $this->request->getSession()->write('message_data', json_encode($this->request->getData()));
                return $this->redirect('/u/' . $user->nickname . '/review-message');
            } else {
                $this->Flash->error('Please check the form errors!');
            }
        } else {
            if ($this->request->getSession()->check('message_data')) {
                $data = json_decode($this->request->getSession()->read('message_data'));
                $form->setData([
                    'subject' => $data->subject,
                    'message' => $data->message
                ]);
            }
        }
        $this->set('user', $user);
        $this->set('form', $form);
    }

    public function reviewMessage()
    {
        $nickname = $this->request->getParam('nickname');
        $userTable = TableRegistry::getTableLocator()->get('User');
        $user = $userTable->find()->where(['nickname' => $nickname])->first();
        if ($user == null || $user->id === $this->request->getAttribute('identity')->id) {
            return $this->redirect('/');
        }
        $data = json_decode($this->request->getSession()->read('message_data'));
        if ($this->request->is('post')) {
            $threadTable = TableRegistry::getTableLocator()->get('Thread');
            $threadUserTable = TableRegistry::getTableLocator()->get('ThreadUser');
            $messageTable = TableRegistry::getTableLocator()->get('Message');
            $thread = $threadTable->newEntity();
            $thread->id = Uuid::uuid4();
            $thread->subject = $data->subject;
            $thread->created_at = date('Y-m-d H:i:s');
            $thread->updated_at = date('Y-m-d H:i:s');
            $threadTable->save($thread);

            $threadUser = $threadUserTable->newEntity();
            $threadUser->thread_id = $thread->id;
            $threadUser->user_id = $user->id;
            $threadUserTable->save($threadUser);

            $threadUser = $threadUserTable->newEntity();
            $threadUser->thread_id = $thread->id;
            $threadUser->user_id = $this->request->getAttribute('identity')->id;
            $threadUserTable->save($threadUser);

            $message = $messageTable->newEntity();
            $message->thread_id = $thread->id;
            $message->user_id = $this->request->getAttribute('identity')->id;
            $message->message = $data->message;
            $message->created_at = date('Y-m-d H:i:s');
            $messageTable->save($message);

            $this->request->getSession()->delete('message_data');
            return $this->redirect('/my-page/messages');
        }
        $this->set('user', $user);
        $this->set('data', $data);
    }
}
