<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $today
 * @property string $title
 * @property string $company
 * @property string $text
 * @property string|null $bookmark
 * @property int $mony
 * @property int $initial
 * @property string $flee
 * @property string $trial
 * @property string $major
 * @property string $middle
 * @property string $url
 */
class Product extends Entity
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
        'today' => true,
        'title' => true,
        'company' => true,
        'text' => true,
        'bookmark' => true,
        'mony' => true,
        'initial' => true,
        'flee' => true,
        'trial' => true,
        'major' => true,
        'middle' => true,
        'url' => true,
    ];
}
