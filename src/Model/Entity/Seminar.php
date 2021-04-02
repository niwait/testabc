<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seminar Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $today
 * @property string $title
 * @property string $company
 * @property string $mail
 * @property string $text
 * @property string $prefecture
 * @property string $eria
 * @property string $date
 * @property string $contents
 * @property string $cost
 * @property string $url
 * @property string $major
 * @property string $middle
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
        'mail' => true,
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
