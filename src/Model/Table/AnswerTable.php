<?php

namespace App\Model\Table;

use App\Model\Entity\Answer;
use Cake\ORM\Table;

class AnswerTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('answer');
        $this->setPrimaryKey('id');
        $this->setEntityClass(Answer::class);
        $this->belongsTo('User');
        $this->belongsTo('Question');
    }
}

