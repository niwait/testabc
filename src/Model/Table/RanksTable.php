<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ranks Model
 *
 * @method \App\Model\Entity\Rank get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rank newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rank[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rank|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rank saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rank patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rank[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rank findOrCreate($search, callable $callback = null, $options = [])
 */
class RanksTable extends Table
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

        $this->setTable('ranks');
        $this->setDisplayField('id');
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
            ->integer('ranksNo')
            ->notEmptyString('ranksNo');

        $validator
            ->integer('questionId')
            ->requirePresence('questionId', 'create')
            ->notEmptyString('questionId');

        return $validator;
    }
}
