<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Program Model
 *
 * @property \App\Model\Table\ProgramTypeTable&\Cake\ORM\Association\BelongsTo $ProgramType
 * @property \App\Model\Table\GroupTable&\Cake\ORM\Association\BelongsTo $Group
 * @property \App\Model\Table\SiteTable&\Cake\ORM\Association\BelongsToMany $Site
 *
 * @method \App\Model\Entity\Program newEmptyEntity()
 * @method \App\Model\Entity\Program newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Program[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Program get($primaryKey, $options = [])
 * @method \App\Model\Entity\Program findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Program patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Program[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Program|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Program saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Program[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Program[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Program[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Program[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProgramTable extends Table
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

        $this->setTable('program');
        $this->setDisplayField('program_id');
        $this->setPrimaryKey('program_id');

        $this->belongsTo('ProgramType', [
            'foreignKey' => 'program_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Group', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Site', [
            'foreignKey' => 'program_id',
            'targetForeignKey' => 'site_id',
            'joinTable' => 'site_program',
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
            ->integer('program_type_id')
            ->notEmptyString('program_type_id');

        $validator
            ->scalar('program_name')
            ->maxLength('program_name', 100)
            ->requirePresence('program_name', 'create')
            ->notEmptyString('program_name');

        $validator
            ->scalar('program_manager')
            ->maxLength('program_manager', 50)
            ->requirePresence('program_manager', 'create')
            ->notEmptyString('program_manager');

        $validator
            ->integer('group_id')
            ->notEmptyString('group_id');

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
        $rules->add($rules->existsIn('program_type_id', 'ProgramType'), ['errorField' => 'program_type_id']);
        $rules->add($rules->existsIn('group_id', 'Group'), ['errorField' => 'group_id']);

        return $rules;
    }
}
