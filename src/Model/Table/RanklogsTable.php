<?php
namespace App\Model\Table;

use App\Model\Entity\Ranklog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ranklogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Keywords
 * @property \Cake\ORM\Association\BelongsTo $Engines
 */
class RanklogsTable extends Table
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

        $this->table('ranklogs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Keywords', [
            'foreignKey' => 'keyword_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Engines', [
            'foreignKey' => 'engine_id',
            'joinType' => 'INNER'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('keyword', 'create')
            ->notEmpty('keyword');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        $validator
            ->requirePresence('params', 'create')
            ->notEmpty('params');

        $validator
            ->add('rankdate', 'valid', ['rule' => 'date'])
            ->requirePresence('rankdate', 'create')
            ->notEmpty('rankdate');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['keyword_id'], 'Keywords'));
        $rules->add($rules->existsIn(['engine_id'], 'Engines'));
        return $rules;
    }
}
