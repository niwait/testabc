<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Product Model
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductTable extends Table
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

        $this->setTable('product');
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
            ->scalar('bookmark')
            ->maxLength('bookmark', 128)
            ->allowEmptyString('bookmark');

        $validator
            ->integer('mony')
            ->allowEmptyString('mony');

        $validator
            ->integer('initial')
            ->allowEmptyString('initial');

        $validator
            ->scalar('flee')
            ->maxLength('flee', 50)
            ->allowEmptyString('flee');

        $validator
            ->scalar('trial')
            ->maxLength('trial', 50)
            ->allowEmptyString('trial');

        $validator
            ->scalar('major')
            ->maxLength('major', 64)
            ->allowEmptyString('major');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 64)
            ->allowEmptyString('middle');

        $validator
            ->scalar('free_text')
            ->maxLength('free_text', 256)
            ->allowEmptyString('free_text');

        $validator
            ->scalar('url')
            ->maxLength('url', 512)
            ->allowEmptyString('url');

        return $validator;
    }
}
