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
            ->requirePresence('today', 'create')
            ->notEmptyDate('today');

        $validator
            ->scalar('title')
            ->maxLength('title', 256)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('company')
            ->maxLength('company', 256)
            ->requirePresence('company', 'create')
            ->notEmptyString('company');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 128)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->scalar('text')
            ->maxLength('text', 256)
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 50)
            ->requirePresence('prefecture', 'create')
            ->notEmptyString('prefecture');

        $validator
            ->scalar('place')
            ->maxLength('place', 50)
            ->requirePresence('place', 'create')
            ->notEmptyString('place');

        $validator
            ->scalar('operation')
            ->maxLength('operation', 50)
            ->requirePresence('operation', 'create')
            ->notEmptyString('operation');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 50)
            ->requirePresence('contents', 'create')
            ->notEmptyString('contents');

        $validator
            ->integer('reword')
            ->requirePresence('reword', 'create')
            ->notEmptyString('reword');

        $validator
            ->scalar('recruitment')
            ->maxLength('recruitment', 50)
            ->requirePresence('recruitment', 'create')
            ->notEmptyString('recruitment');

        $validator
            ->scalar('url')
            ->maxLength('url', 50)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->scalar('major')
            ->maxLength('major', 32)
            ->requirePresence('major', 'create')
            ->notEmptyString('major');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 32)
            ->requirePresence('middle', 'create')
            ->notEmptyString('middle');

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
            ->requirePresence('occupation', 'create')
            ->notEmptyString('occupation');

        return $validator;
    }
}
