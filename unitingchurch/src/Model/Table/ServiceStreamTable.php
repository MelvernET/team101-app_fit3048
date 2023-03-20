<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceStream Model
 *
 * @method \App\Model\Entity\ServiceStream newEmptyEntity()
 * @method \App\Model\Entity\ServiceStream newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceStream[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceStream get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceStream findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ServiceStream patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceStream[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceStream|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceStream saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceStream[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServiceStream[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServiceStream[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServiceStream[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ServiceStreamTable extends Table
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

        $this->setTable('service_stream');
        $this->setDisplayField('service_stream_id');
        $this->setPrimaryKey('service_stream_id');
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
            ->scalar('service_stream_name_')
            ->maxLength('service_stream_name_', 100)
            ->requirePresence('service_stream_name_', 'create')
            ->notEmptyString('service_stream_name_');

        return $validator;
    }
}
