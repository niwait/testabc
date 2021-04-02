<?php

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }

    public function getAddress()
    {
        return $this->postal_code . ', ' . $this->address_region . ', ' . $this->address_1 . ', ' . $this->address_2 . ', ' . $this->address_3;
    }
}
