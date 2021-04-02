<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity
 *
 * @property int $id
 * @property string $img
 * @property string $url
 * @property int|null $count
 * @property \Cake\I18n\FrozenDate $endday
 * @property \Cake\I18n\FrozenDate $startday
 * @property string $showhide
 */
class Banner extends Entity
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
        'img' => true,
        'url' => true,
        'count' => true,
        'endday' => true,
        'startday' => true,
        'showhide' => true,
    ];
}
