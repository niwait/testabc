<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class QuestionForm extends Form
{
    protected function _buildSchema(\Cake\Form\Schema $schema)
    {
        return $schema->addField('question', 'string');
    }

    public function validationDefault(Validator $validator)
    {
        $validator->requirePresence('question');
        return $validator;
    }

    protected function _execute(array $data)
    {
        return true;
    }
}
