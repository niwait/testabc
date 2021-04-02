<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adomin Entity
 *
 * @property int $id
 * @property string $name
 * @property string $kana
 * @property string $mail
 * @property int $tel
 * @property string $password
 * @property string $company
 * @property string $adomin
 */
class Adomin extends Entity
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
        'name' => true,
        'kana' => true,
        'mail' => true,
        'tel' => true,
        'password' => true,
        'company' => true,
        'adomin' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
