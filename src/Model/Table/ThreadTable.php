<?php

namespace App\Model\Table;

use App\Model\Entity\Thread;
use Cake\ORM\Table;

class ThreadTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('thread');
        $this->setPrimaryKey('id');
        $this->setEntityClass(Thread::class);
    }
}

