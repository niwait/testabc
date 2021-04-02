<?php

namespace App\Form;

use Cake\Event\EventManager;
use Cake\Form\Form;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class ProfileForm extends Form
{
    protected $userId;

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    protected function _buildSchema(\Cake\Form\Schema $schema)
    {
        return $schema->addField('nickname', 'string')
            ->addField('name', 'string')
            ->addField('kana', 'string')
            ->addField('occupation', 'string')
            ->addField('qualification', 'string')
            ->addField('company_name', 'string')
            ->addField('postal_code', 'string')
            ->addField('address_1', 'string')
            ->addField('address_2', 'string')
            ->addField('address_3', 'string')
            ->addField('email', 'string')
            ->addField('introduction', 'string')
            ->addField('area_of_speciality', 'string')
            ->addField('specialized_field', 'string');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('nickname', [
                'rule1' => [
                    'rule' => [$this, 'checkUniqueNickname'],
                    'message' => 'このニックネームは既に使われています。'
                ]
            ])
            ->add('email', 'format', [
                'rule' => 'email',
                'message' => 'メールアドレスが有効ではありません。'
            ])
            ->add('email', 'custom', [
                'rule' => [$this, 'checkUniqueEmail'],
                'message' => 'こちらのメールアドレスはすでに使用されています。'
            ]);;
        return $validator;
    }

    public function checkUniqueNickname($value, $context)
    {
        $userTable = TableRegistry::getTableLocator()->get('User');
        return $userTable->find()->where(['nickname' => $value, 'id !=' => $this->userId])->count() === 0;
    }

    public function checkUniqueEmail($value, $context)
    {
        $userTable = TableRegistry::getTableLocator()->get('User');
        return $userTable->find()->where(['email' => $value, 'id !=' => $this->userId])->count() === 0;
    }

    protected function _execute(array $data)
    {
        return true;
    }
}
