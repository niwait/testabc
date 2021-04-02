<?php

namespace App\Model\Table;

use App\Model\Entity\UserCV;
use Cake\ORM\Table;

class UserCVTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('user_cv');
        $this->setPrimaryKey('user_id');
        $this->setEntityClass(UserCV::class);
    }
}

