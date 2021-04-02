<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seminars Model
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
class SeminarsTable extends Table
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

        $this->setTable('seminars');
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
            ->allowEmptyDate('today');

        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->allowEmptyString('title');

        $validator
            ->scalar('company')
            ->maxLength('company', 50)
            ->allowEmptyString('company');

        $validator
            ->scalar('text')
            ->maxLength('text', 512)
            ->allowEmptyString('text');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 50)
            ->allowEmptyString('prefecture');

        $validator
            ->scalar('eria')
            ->maxLength('eria', 50)
            ->allowEmptyString('eria');

        $validator
            ->scalar('date')
            ->maxLength('date', 50)
            ->allowEmptyString('date');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 256)
            ->allowEmptyString('contents');

        $validator
            ->integer('cost')
            ->allowEmptyString('cost');

        $validator
            ->scalar('url')
            ->maxLength('url', 512)
            ->allowEmptyString('url');

        $validator
            ->scalar('major')
            ->maxLength('major', 50)
            ->allowEmptyString('major');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 50)
            ->allowEmptyString('middle');

        $validator
            ->nonNegativeInteger('good')
            ->allowEmptyString('good');

        return $validator;
    }
}
