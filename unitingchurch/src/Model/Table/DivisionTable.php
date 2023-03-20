<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Division Model
 *
 * @method \App\Model\Entity\Division newEmptyEntity()
 * @method \App\Model\Entity\Division newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Division[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Division get($primaryKey, $options = [])
 * @method \App\Model\Entity\Division findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Division patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Division[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Division|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Division saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DivisionTable extends Table
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

        $this->setTable('division');
        $this->setDisplayField('divison_id');
        $this->setPrimaryKey('divison_id');
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
            ->scalar('division_name')
            ->maxLength('division_name', 50)
            ->requirePresence('division_name', 'create')
            ->notEmptyString('division_name');

        $validator
            ->scalar('division_general_manager')
            ->maxLength('division_general_manager', 50)
            ->requirePresence('division_general_manager', 'create')
            ->notEmptyString('division_general_manager');

        return $validator;
    }
}
