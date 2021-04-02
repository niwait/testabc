<?php

namespace App\Model\Table;

use App\Model\Entity\Bookmark;
use Cake\ORM\Table;

class BookmarkTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('bookmark');
        $this->setPrimaryKey('id');
        $this->setEntityClass(Bookmark::class);
    }
}

