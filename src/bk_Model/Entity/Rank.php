<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rank Entity
 *
 * @property int $id
 * @property int $no1
 * @property int $no2
 * @property int $no3
 * @property int $no4
 * @property int $no5
 */
class Rank extends Entity
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
        'no1' => true,
        'no2' => true,
        'no3' => true,
        'no4' => true,
        'no5' => true,
    ];
}
