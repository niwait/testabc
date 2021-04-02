<?php

namespace App\Model\Table;

use App\Model\Entity\Question;
use Cake\ORM\Table;

class QuestionTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('question');
        $this->setPrimaryKey('id');
        $this->setEntityClass(Question::class);
        $this->belongsTo('User');
        $this->hasMany('Answer');
        $this->hasMany('QuestionTag');
        $this->hasMany('QuestionLike');
    }
}

