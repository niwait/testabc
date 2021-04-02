<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Job Model
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Job[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Job findOrCreate($search, callable $callback = null, $options = [])
 */
class JobTable extends Table
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

        $this->setTable('job');
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
            ->maxLength('title', 256)
            ->allowEmptyString('title');

        $validator
            ->scalar('company')
            ->maxLength('company', 256)
            ->allowEmptyString('company');

        $validator
            ->scalar('text')
            ->maxLength('text', 256)
            ->allowEmptyString('text');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 50)
            ->allowEmptyString('prefecture');

        $validator
            ->scalar('place')
            ->maxLength('place', 50)
            ->allowEmptyString('place');

        $validator
            ->scalar('operation')
            ->maxLength('operation', 50)
            ->allowEmptyString('operation');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 50)
            ->allowEmptyString('contents');

        $validator
            ->integer('reword')
            ->allowEmptyString('reword');

        $validator
            ->scalar('recruitment')
            ->maxLength('recruitment', 50)
            ->allowEmptyString('recruitment');

        $validator
            ->scalar('url')
            ->maxLength('url', 50)
            ->allowEmptyString('url');

        $validator
            ->scalar('major')
            ->maxLength('major', 32)
            ->allowEmptyString('major');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 32)
            ->allowEmptyString('middle');

        $validator
            ->scalar('good')
            ->maxLength('good', 32)
            ->allowEmptyString('good');

        $validator
            ->scalar('bookmark')
            ->maxLength('bookmark', 256)
            ->allowEmptyString('bookmark');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 50)
            ->allowEmptyString('occupation');

        return $validator;
    }
}
