<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProgramTypes Model
 *
 * @method \App\Model\Entity\ProgramType newEmptyEntity()
 * @method \App\Model\Entity\ProgramType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProgramType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProgramType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProgramType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProgramType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProgramType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProgramType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProgramType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProgramType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProgramType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProgramType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProgramType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProgramTypesTable extends Table
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

        $this->setTable('program_types');
        $this->setDisplayField('program_type_id');
        $this->setPrimaryKey('program_type_id');
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
            ->scalar('program_type_name')
            ->maxLength('program_type_name', 100)
            ->requirePresence('program_type_name', 'create')
            ->notEmptyString('program_type_name');

        return $validator;
    }
}
