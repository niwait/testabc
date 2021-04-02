<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $today
 * @property string|null $product
 * @property string|null $company
 * @property string|null $text
 * @property string|null $bookmark
 * @property int|null $mony
 * @property int|null $initial
 * @property string|null $flee
 * @property string|null $trial
 * @property string|null $major
 * @property string|null $middle
 * @property string|null $free_text
 * @property string|null $url
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
        'product' => true,
        'company' => true,
        'text' => true,
        'bookmark' => true,
        'mony' => true,
        'initial' => true,
        'flee' => true,
        'trial' => true,
        'major' => true,
        'middle' => true,
        'free_text' => true,
        'url' => true,
    ];
}
