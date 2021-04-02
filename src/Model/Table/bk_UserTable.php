<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * User Model
 *
 * @property &\Cake\ORM\Association\HasMany $Answer
 * @property &\Cake\ORM\Association\HasMany $AnswerLike
 * @property &\Cake\ORM\Association\HasMany $Bookmark
 * @property &\Cake\ORM\Association\HasMany $Message
 * @property &\Cake\ORM\Association\HasMany $Question
 * @property &\Cake\ORM\Association\HasMany $QuestionLike
 * @property &\Cake\ORM\Association\HasMany $UserCv
 * @property &\Cake\ORM\Association\HasMany $UserEducationHistory
 * @property &\Cake\ORM\Association\HasMany $UserLink
 * @property &\Cake\ORM\Association\HasMany $UserWorkHistory
 * @property &\Cake\ORM\Association\BelongsToMany $Thread
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UserTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);




        $this->setEntityClass(User::class);



        $this->setTable('user');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Answer', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('AnswerLike', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Bookmark', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Message', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Question', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('QuestionLike', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserCv', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserEducationHistory', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserLink', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserWorkHistory', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsToMany('Thread', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'thread_id',
            'joinTable' => 'thread_user',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('kana')
            ->maxLength('kana', 16)
            ->requirePresence('kana', 'create')
            ->notEmptyString('kana');

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 32)
            ->requirePresence('nickname', 'create')
            ->notEmptyString('nickname')
            ->add('nickname', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('company')
            ->maxLength('company', 64)
            ->allowEmptyString('company');

        $validator
            ->scalar('position')
            ->maxLength('position', 50)
            ->allowEmptyString('position');

        $validator
            ->scalar('position_detail')
            ->maxLength('position_detail', 128)
            ->allowEmptyString('position_detail');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 40)
            ->allowEmptyString('phone_number');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 25)
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('address_region')
            ->maxLength('address_region', 255)
            ->allowEmptyString('address_region');

        $validator
            ->scalar('address_1')
            ->maxLength('address_1', 255)
            ->allowEmptyString('address_1');

        $validator
            ->scalar('address_2')
            ->maxLength('address_2', 255)
            ->allowEmptyString('address_2');

        $validator
            ->scalar('address_3')
            ->maxLength('address_3', 255)
            ->allowEmptyString('address_3');

        $validator
            ->integer('birth')
            ->requirePresence('birth', 'create')
            ->notEmptyString('birth');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 50)
            ->allowEmptyString('occupation');

        $validator
            ->scalar('qualification')
            ->allowEmptyString('qualification');

        $validator
            ->scalar('introduction')
            ->allowEmptyString('introduction');

        $validator
            ->scalar('area_of_speciality')
            ->maxLength('area_of_speciality', 80)
            ->allowEmptyString('area_of_speciality');

        $validator
            ->scalar('specialized_field')
            ->maxLength('specialized_field', 80)
            ->allowEmptyString('specialized_field');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['nickname']));

        return $rules;
    }
}
