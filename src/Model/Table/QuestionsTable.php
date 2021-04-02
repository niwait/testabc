<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionsTable extends Table
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

        $this->setTable('questions');
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
            ->scalar('question-id')
            ->maxLength('question-id', 50)
            ->allowEmptyString('question-id');

        $validator
            ->scalar('question')
            ->maxLength('question', 50)
            ->allowEmptyString('question');

        $validator
            ->scalar('major')
            ->maxLength('major', 50)
            ->allowEmptyString('major');

        $validator
            ->scalar('middle')
            ->maxLength('middle', 50)
            ->allowEmptyString('middle');

        $validator
            ->scalar('free')
            ->maxLength('free', 50)
            ->allowEmptyString('free');

        $validator
            ->scalar('tag')
            ->maxLength('tag', 50)
            ->allowEmptyString('tag');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->time('time')
            ->allowEmptyTime('time');

        $validator
            ->integer('viws')
            ->allowEmptyString('viws');

        $validator
            ->integer('good')
            ->allowEmptyString('good');

        $validator
            ->integer('answer')
            ->allowEmptyString('answer');

        return $validator;
    }
}
