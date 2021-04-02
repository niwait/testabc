<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seminar Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $today
 * @property string|null $title
 * @property string|null $company
 * @property string|null $text
 * @property string|null $prefecture
 * @property string|null $eria
 * @property string|null $date
 * @property string|null $contents
 * @property int|null $cost
 * @property string|null $url
 * @property string|null $major
 * @property string|null $middle
 * @property int|null $good
 */
class Seminar extends Entity
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
        'prefecture' => true,
        'eria' => true,
        'date' => true,
        'contents' => true,
        'cost' => true,
        'url' => true,
        'major' => true,
        'middle' => true,
        'good' => true,
    ];
}
