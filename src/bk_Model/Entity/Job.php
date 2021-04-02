<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $today
 * @property string $title
 * @property string $company
 * @property string $mail
 * @property string $text
 * @property string $prefecture
 * @property string $place
 * @property string $operation
 * @property string $contents
 * @property int $reword
 * @property string $recruitment
 * @property string $url
 * @property string $major
 * @property string $middle
 * @property string|null $good
 * @property string|null $bookmark
 * @property string $occupation
 */
class Job extends Entity
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
        'place' => true,
        'operation' => true,
        'contents' => true,
        'reword' => true,
        'recruitment' => true,
        'url' => true,
        'major' => true,
        'middle' => true,
        'good' => true,
        'bookmark' => true,
        'occupation' => true,
    ];
}
