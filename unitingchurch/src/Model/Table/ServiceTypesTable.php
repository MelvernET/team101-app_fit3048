<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceTypes Model
 *
 * @property \App\Model\Table\ServiceStreamsTable&\Cake\ORM\Association\BelongsTo $ServiceStreams
 *
 * @method \App\Model\Entity\ServiceType newEmptyEntity()
 * @method \App\Model\Entity\ServiceType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ServiceType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServiceType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServiceType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServiceType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ServiceTypesTable extends Table
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

        $this->setTable('service_types');
        $this->setDisplayField(['service_type_id','service_type_name']);
        $this->setPrimaryKey('service_type_id');

        $this->belongsTo('ServiceStreams', [
            'foreignKey' => 'service_stream_id',
            'joinType' => 'INNER',
        ]);

        $this->hasMany('Services',[
            'className' => 'Services',
            'foreignKey' => 'service_id'

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
            ->scalar('service_type_name')
            ->maxLength('service_type_name', 100)
            ->requirePresence('service_type_name', 'create')
            ->notEmptyString('service_type_name');

        $validator
            ->integer('service_stream_id')
            ->notEmptyString('service_stream_id');

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
        $rules->add($rules->existsIn('service_stream_id', 'ServiceStreams'), ['errorField' => 'service_stream_id']);

        return $rules;
    }
}
