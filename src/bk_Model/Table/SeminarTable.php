<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seminar Model
 *
 * @method \App\Model\Entity\Seminar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Seminar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Seminar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seminar|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seminar saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seminar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Seminar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seminar findOrCreate($search, callable $callback = null, $options = [])
 */
class SeminarTable extends Table
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

        $this->setTable('seminar');
        $this->setDisplayField('title');
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
            ->date('today')
            ->requirePresence('today', 'create')
            ->notEmptyDate('today');

        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('company')
            ->maxLength('company', 50)
            ->requirePresence('company', 'create')
            ->notEmptyString('company');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 128)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->scalar('text')
            ->maxLength('text', 512)
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 50)
            ->requirePresence('prefecture', 'create')
            ->notEmptyString('prefecture');

        $validator
            ->scalar('eria')
            ->maxLength('eria', 50)
            ->requirePresence('eria', 'create')
            ->notEmptyString('eria');

        $validator
            ->scalar('date')
            ->maxLength('date', 50)
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 256)
            ->requirePresence('contents', 'create')
            ->notEmptyString('contents');

        $validator
            ->integer('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

        $validator
            ->scalar('url')
            ->maxLength('url', 512)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->scalar('major')
            ->maxLength('major', 50)
            ->requirePresence('major', 'create')
            ->notEmptyString('major');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 50)
            ->requirePresence('middle', 'create')
            ->notEmptyString('middle');

        $validator
            ->nonNegativeInteger('good')
            ->allowEmptyString('good');

        return $validator;
    }
}
