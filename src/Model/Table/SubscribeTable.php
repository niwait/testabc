<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subscribe Model
 *
 * @method \App\Model\Entity\Subscribe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subscribe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subscribe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subscribe|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subscribe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subscribe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subscribe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subscribe findOrCreate($search, callable $callback = null, $options = [])
 */
class SubscribeTable extends Table
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

        $this->setTable('subscribe');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('userId')
            ->requirePresence('userId', 'create')
            ->notEmptyString('userId');

        $validator
            ->integer('seminarId')
            ->requirePresence('seminarId', 'create')
            ->notEmptyString('seminarId');

        $validator
            ->scalar('name')
            ->maxLength('name', 64)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('kana')
            ->maxLength('kana', 64)
            ->requirePresence('kana', 'create')
            ->notEmptyString('kana');

        $validator
            ->integer('postcode')
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode');

        $validator
            ->scalar('address_a')
            ->maxLength('address_a', 16)
            ->requirePresence('address_a', 'create')
            ->notEmptyString('address_a');

        $validator
            ->scalar('address_b')
            ->maxLength('address_b', 64)
            ->requirePresence('address_b', 'create')
            ->notEmptyString('address_b');

        $validator
            ->scalar('address_c')
            ->maxLength('address_c', 64)
            ->requirePresence('address_c', 'create')
            ->notEmptyString('address_c');

        $validator
            ->scalar('address_d')
            ->maxLength('address_d', 64)
            ->allowEmptyString('address_d');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 256)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 16)
            ->requirePresence('tel', 'create')
            ->notEmptyString('tel');

        $validator
            ->scalar('educat')
            ->maxLength('educat', 512)
            ->requirePresence('educat', 'create')
            ->notEmptyString('educat');

        $validator
            ->scalar('skill')
            ->maxLength('skill', 512)
            ->requirePresence('skill', 'create')
            ->notEmptyString('skill');

        $validator
            ->scalar('pr')
            ->maxLength('pr', 512)
            ->requirePresence('pr', 'create')
            ->notEmptyString('pr');

        return $validator;
    }
}
