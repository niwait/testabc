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
            ->notEmptyDate('today','登録日が入力されていません。');

        $validator
            ->scalar('title')
            ->maxLength('title', 256)
            ->requirePresence('title', 'create')
            ->notEmptyString('title','タイトルが入力されていません。');

        $validator
            ->scalar('company')
            ->maxLength('company', 256)
            ->requirePresence('company', 'create')
            ->notEmptyString('company','会社名が入力されていません。');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 128)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail','メールアドレスが入力されていません。');

        $validator
            ->scalar('text')
            ->maxLength('text', 256)
            ->requirePresence('text', 'create')
            ->notEmptyString('text','テキストが入力されていません。');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 50)
            ->requirePresence('prefecture', 'create')
            ->notEmptyString('prefecture','都道府県');

        $validator
            ->scalar('place')
            ->maxLength('place', 50)
            ->requirePresence('place', 'create')
            ->notEmptyString('place','場所が入力されていません。');

        $validator
            ->scalar('operation')
            ->maxLength('operation', 50)
            ->requirePresence('operation', 'create')
            ->notEmptyString('operation','稼働日時が入力されていません。');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 50)
            ->requirePresence('contents', 'create')
            ->notEmptyString('contents','内容が入力されていません。');

        $validator
            ->integer('reword')
            ->requirePresence('reword', 'create')
            ->notEmptyString('reword','報酬が入力差されていません。');

        $validator
            ->scalar('recruitment')
            ->maxLength('recruitment', 50)
            ->requirePresence('recruitment', 'create')
            ->notEmptyString('recruitment','募集期間が入力されていません。');

        $validator
            ->scalar('url')
            ->maxLength('url', 50)
            ->requirePresence('url', 'create')
            ->notEmptyString('url','URLが入力されていません。');

        $validator
            ->scalar('major')
            ->maxLength('major', 32)
            ->requirePresence('major', 'create')
            ->notEmptyString('major','大分類が入力されていません。');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 32)
            ->requirePresence('middle', 'create')
            ->notEmptyString('middle','中分類が入力されていません。');

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
            ->notEmptyString('occupation','職種が入力されていません。');

        return $validator;
    }
}
