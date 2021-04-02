<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class MessageForm extends Form
{
    protected function _buildSchema(\Cake\Form\Schema $schema)
    {
        return $schema
            ->addField('subject', 'string')
            ->addField('message', 'string');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('subject')
            ->requirePresence('message');
        return $validator;
    }

    protected function _execute(array $data)
    {
        return true;
    }
}
