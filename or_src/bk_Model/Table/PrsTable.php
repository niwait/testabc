<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prs Model
 *
 * @method \App\Model\Entity\Pr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pr newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pr[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pr findOrCreate($search, callable $callback = null, $options = [])
 */
class PrsTable extends Table
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

        $this->setTable('prs');
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
            ->scalar('company')
            ->maxLength('company', 50)
            ->notEmptyString('company');

        $validator
            ->scalar('img')
            ->maxLength('img', 512)
            ->notEmptyString('img');

        $validator
            ->scalar('url')
            ->maxLength('url', 512)
            ->notEmptyString('url');

        return $validator;
    }
}
