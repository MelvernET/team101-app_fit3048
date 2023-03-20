<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Group Model
 *
 * @property \App\Model\Table\DivisionTable&\Cake\ORM\Association\BelongsTo $Division
 *
 * @method \App\Model\Entity\Group newEmptyEntity()
 * @method \App\Model\Entity\Group newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Group[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Group get($primaryKey, $options = [])
 * @method \App\Model\Entity\Group findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Group patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Group[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Group|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Group saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Group[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Group[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Group[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Group[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GroupTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('group');
        $this->setDisplayField('group_id');
        $this->setPrimaryKey('group_id');

        $this->belongsTo('Division', [
            'foreignKey' => 'divison_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('group_name')
            ->maxLength('group_name', 50)
            ->requirePresence('group_name', 'create')
            ->notEmptyString('group_name');

        $validator
            ->scalar('group_executive_manager')
            ->maxLength('group_executive_manager', 50)
            ->requirePresence('group_executive_manager', 'create')
            ->notEmptyString('group_executive_manager');

        $validator
            ->integer('divison_id')
            ->notEmptyString('divison_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('divison_id', 'Division'), ['errorField' => 'divison_id']);

        return $rules;
    }
}
