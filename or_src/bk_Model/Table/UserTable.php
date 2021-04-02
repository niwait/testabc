<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Table;

class UserTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('user');
        $this->setPrimaryKey('id');
        $this->setEntityClass(User::class);
    }
}

