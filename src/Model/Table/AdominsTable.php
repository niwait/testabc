<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adomins Model
 *
 * @method \App\Model\Entity\Adomin get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adomin newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Adomin[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adomin|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adomin saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adomin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adomin[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adomin findOrCreate($search, callable $callback = null, $options = [])
 */
class AdominsTable extends Table
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

        $this->setTable('adomins');
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->notEmptyString('name','名前が入力されていません。');
     

        $validator
            ->scalar('kana')
            ->maxLength('kana', 50)
            ->notEmptyString('kana','名前が入力されていません');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 50)
            ->notEmptyString('mail','メールアドレスが入力されていません');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 50)
            ->notEmptyString('tel','電話番号が入力されていません');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->notEmptyString('password','パスワードが入力されていません');

        $validator
            ->scalar('company')
            ->maxLength('company', 50)
            ->notEmptyString('company','会社名が入力されていません');

        $validator
            ->scalar('adomin_no')
            ->maxLength('adomin_no', 50)
            ->notEmptyString('adomin_no','権限が入力されていません');

        return $validator;
    }
}
