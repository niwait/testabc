<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Banners Model
 *
 * @method \App\Model\Entity\Banner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Banner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Banner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Banner|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banner saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Banner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Banner findOrCreate($search, callable $callback = null, $options = [])
 */
class BannersTable extends Table
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

        $this->setTable('banners');
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
            ->scalar('img')
            ->maxLength('img', 512)
            ->requirePresence('img', 'create')
            ->notEmptyString('img','画像が入力されていません。');

        $validator
            ->scalar('url')
            ->maxLength('url', 256)
            ->requirePresence('url', 'create')
            ->notEmptyString('url','URLが入力されていません。');

        $validator
            ->integer('count')
            ->allowEmptyString('count');

        $validator
            ->date('endday')
            ->requirePresence('endday', 'create')
            ->notEmptyDate('endday','終了日が入力されていません。');

        $validator
            ->date('startday')
            ->requirePresence('startday', 'create')
            ->notEmptyDate('startday','開始日が入力されていません。');

        $validator
            ->scalar('showhide')
            ->maxLength('showhide', 8)
            ->requirePresence('showhide', 'create')
            ->notEmptyString('showhide','公開非公開が入力されていません。');

        return $validator;
    }
}
