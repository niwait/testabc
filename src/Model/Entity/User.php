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
 * @property string $email
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
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string|null $position_area
 * @property int|null $status
 *
 * @property \App\Model\Entity\Answer[] $answer
 * @property \App\Model\Entity\AnswerLike[] $answer_like
 * @property \App\Model\Entity\AnswerNotificationCount[] $answer_notification_count
 * @property \App\Model\Entity\Bookmark[] $bookmark
 * @property \App\Model\Entity\JobLike[] $job_like
 * @property \App\Model\Entity\Message[] $message
 * @property \App\Model\Entity\ProductLike[] $product_like
 * @property \App\Model\Entity\Question[] $question
 * @property \App\Model\Entity\QuestionLike[] $question_like
 * @property \App\Model\Entity\SeminarLike[] $seminar_like
 * @property \App\Model\Entity\UserCv[] $user_cv
 * @property \App\Model\Entity\UserEducationHistory[] $user_education_history
 * @property \App\Model\Entity\UserLink[] $user_link
 * @property \App\Model\Entity\UserWorkHistory[] $user_work_history
 * @property \App\Model\Entity\Thread[] $thread
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
        'position_area' => true,
        'status' => true,
        'answer' => true,
        'answer_like' => true,
        'answer_notification_count' => true,
        'bookmark' => true,
        'job_like' => true,
        'message' => true,
        'product_like' => true,
        'question' => true,
        'question_like' => true,
        'seminar_like' => true,
        'user_cv' => true,
        'user_education_history' => true,
        'user_link' => true,
        'user_work_history' => true,
        'thread' => true,
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
        return $this->postal_code . '<br>' . $this->address_region . '<br>' . $this->address_1 . $this->address_2 . '<br>'. $this->address_3;
    }
}
