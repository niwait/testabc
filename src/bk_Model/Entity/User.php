<?php
namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $kana
 * @property string $nickname
 * @property string|null $company
 * @property string|null $position
 * @property string|null $position_detail
 * @property string|null $email
 * @property string|null $phone_number
 * @property string|null $postal_code
 * @property string|null $address_region
 * @property string|null $address_1
 * @property string|null $address_2
 * @property string|null $address_3
 * @property int $birth
 * @property string $password
 * @property string|null $occupation
 * @property string|null $qualification
 * @property string|null $introduction
 * @property string|null $area_of_speciality
 * @property string|null $specialized_field
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 */
class User extends Entity
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
        'nickname' => true,
        'company' => true,
        'position' => true,
        'position_detail' => true,
        'email' => true,
        'phone_number' => true,
        'postal_code' => true,
        'address_region' => true,
        'address_1' => true,
        'address_2' => true,
        'address_3' => true,
        'birth' => true,
        'password' => true,
        'occupation' => true,
        'qualification' => true,
        'introduction' => true,
        'area_of_speciality' => true,
        'specialized_field' => true,
        'created_at' => true,
        'updated_at' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }

    public function getAddress()
    {
        return $this->postal_code . ', ' . $this->address_region . ', ' . $this->address_1 . ', ' . $this->address_2 . ', ' . $this->address_3;
    }
}
