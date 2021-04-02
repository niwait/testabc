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
                'message' => 'A valid email address is required'
            ])
            ->add('email', 'custom', [
                'rule' => [$this, 'checkUniqueEmail'],
                'message' => 'Email already in use.'
            ])
            ->add('email_repeat', 'custom', [
                'rule' => [$this, 'checkEmailEqual'],
                'message' => 'Please reenter your email!'
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
