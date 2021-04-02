<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class RegisterVerificationForm extends Form
{
    protected function _buildSchema(\Cake\Form\Schema $schema)
    {
        return $schema
            ->addField('email', 'string')
            ->addField('email_repeat', 'string');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('email', 'format', [
                'rule' => 'email',
                'message' => 'メールアドレスが有効ではありません。'
            ])
            ->add('email', 'custom', [
                'rule' => [$this, 'checkUniqueEmail'],
                'message' => 'こちらのメールアドレスはすでに使用されています。'
            ])
            ->add('email_repeat', 'custom', [
                'rule' => [$this, 'checkEmailEqual'],
                'message' => 'メールアドレスを再度入力してください。'
            ]);
        return $validator;
    }

    public function checkUniqueEmail($value, $context)
    {
        $userTable = TableRegistry::getTableLocator()->get('User');
        return $userTable->find()->where(['email' => $value])->count() === 0;
    }

    public function checkEmailEqual($value, $context)
    {
        return $value === $context['data']['email'];
    }

    protected function _execute(array $data)
    {
        return true;
    }
}
