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
            ->requirePresence('today', 'create')
            ->notEmptyDate('today','登録日が入力されていません。');

        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->requirePresence('title', 'create')
            ->notEmptyString('title','タイトルが入力されていません。');

        $validator
            ->scalar('company')
            ->maxLength('company', 50)
            ->requirePresence('company', 'create')
            ->notEmptyString('company','会社名委が入力されていません。');

        $validator
            ->scalar('text')
            ->maxLength('text', 512)
            ->requirePresence('text', 'create')
            ->notEmptyString('text','テキストが入力されていません。');

        $validator
            ->scalar('bookmark')
            ->maxLength('bookmark', 128)
            ->allowEmptyString('bookmark');

        $validator
            ->integer('mony')
            ->requirePresence('mony', 'create')
            ->notEmptyString('mony','利用料金が入力されていません。');

        $validator
            ->integer('initial')
            ->requirePresence('initial', 'create')
            ->notEmptyString('initial','初期費用が入力されていません。');

        $validator
            ->scalar('flee')
            ->maxLength('flee', 50)
            ->requirePresence('flee', 'create')
            ->notEmptyString('flee','無料プランが入力されていません。');

        $validator
            ->scalar('trial')
            ->maxLength('trial', 50)
            ->requirePresence('trial', 'create')
            ->notEmptyString('trial','トライアルが入力されていません。');

        $validator
            ->scalar('major')
            ->maxLength('major', 64)
            ->requirePresence('major', 'create')
            ->notEmptyString('major','大分類が入力されていません。');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 64)
            ->requirePresence('middle', 'create')
            ->notEmptyString('middle','中分類が入力されていません。');

        $validator
            ->scalar('url')
            ->maxLength('url', 512)
            ->requirePresence('url', 'create')
            ->notEmptyString('url','URL入力されていません。');

        return $validator;
    }
}
