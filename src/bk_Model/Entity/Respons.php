<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Respons Entity
 *
 * @property int $id
 * @property string|null $answer_id
 * @property int|null $count
 * @property string|null $bookmark
 * @property \Cake\I18n\FrozenTime|null $date
 *
 * @property \App\Model\Entity\Answer $answer
 */
class Respons extends Entity
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
        'answer_id' => true,
        'answer' => true,
        'count' => true,
        'bookmark' => true,
        'date' => true,
    ];
}
