<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pr Entity
 *
 * @property int $id
 * @property string|null $company
 * @property string|null $img
 * @property string|null $url
 * @property int|null $count
 * @property \Cake\I18n\FrozenDate|null $startday
 * @property \Cake\I18n\FrozenDate|null $endday
 * @property string|null $showhide
 */
class Pr extends Entity
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
        'company' => true,
        'img' => true,
        'url' => true,
        'count' => true,
        'startday' => true,
        'endday' => true,
        'showhide' => true,
    ];
}
