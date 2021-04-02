<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subscribe Entity
 *
 * @property int $id
 * @property int $userId
 * @property int $seminarId
 * @property string $name
 * @property string $kana
 * @property int $postcode
 * @property string $address_a
 * @property string $address_b
 * @property string $address_c
 * @property string|null $address_d
 * @property string $mail
 * @property string $tel
 * @property string $educat
 * @property string $skill
 * @property string $pr
 */
class Subscribe extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'userId' => true,
        'seminarId' => true,
        'name' => true,
        'kana' => true,
        'postcode' => true,
        'address_a' => true,
        'address_b' => true,
        'address_c' => true,
        'address_d' => true,
        'mail' => true,
        'tel' => true,
        'educat' => true,
        'skill' => true,
        'pr' => true,
    ];
}
