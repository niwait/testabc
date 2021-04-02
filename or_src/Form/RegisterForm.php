<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class RegisterForm extends Form
{
    protected function _buildSchema(\Cake\Form\Schema $schema)
    {
        return $schema->addField('nickname', 'string')
            ->addField('name', 'string')
            ->addField('position', 'string')
            ->addField('company_name', 'string')
            ->addField('email', 'string')
            ->addField('email_repeat', 'string')
            ->addField('address', 'string')
            ->addField('birth', 'integer')
            ->addField('password', 'string');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('name')
            ->requirePresence('position')
            ->requirePresence('address')
            ->requirePresence('birth')
            ->requirePresence('password')
            ->add('nickname', [
                'rule1' => [
                    'rule' => [$this, 'checkNicknameFormat'],
                    'message' => 'Nickname is not valid!'
                ],
                'rule2' => [
                    'rule' => [$this, 'checkUniqueNickname'],
                    'message' => 'Nickname already in use.'
                ]
            ])
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
            ])
            ->add('password', 'length', [
                'rule' => ['minLength', 8],
                'message' => 'A valid password is required'
            ]);
        return $validator;
    }

    public function checkNicknameFormat($value, $context)
    {
        return preg_match('/^[A-Za-z0-9_]+$/', $value) === 1;
    }

    public function checkUniqueNickname($value, $context)
    {
        $userTable = TableRegistry::getTableLocator()->get('User');
        return $userTable->find()->where(['nickname' => $value])->count() === 0;
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
