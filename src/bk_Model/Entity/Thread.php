<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class Thread extends Entity
{
    public function getReceiverUser($currentUser)
    {
        $threadUserTable = TableRegistry::getTableLocator()->get('ThreadUser');

    }
}
