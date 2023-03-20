<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Site Model
 *
 * @property \App\Model\Table\ProgramTable&\Cake\ORM\Association\BelongsToMany $Program
 *
 * @method \App\Model\Entity\Site newEmptyEntity()
 * @method \App\Model\Entity\Site newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Site[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Site get($primaryKey, $options = [])
 * @method \App\Model\Entity\Site findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Site patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Site[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Site|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Site saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Site[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Site[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Site[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Site[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SiteTable extends Table
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

        $this->setTable('site');
        $this->setDisplayField('site_id');
        $this->setPrimaryKey('site_id');

        $this->belongsToMany('Program', [
            'foreignKey' => 'site_id',
            'targetForeignKey' => 'program_id',
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
            ->scalar('site_address')
            ->maxLength('site_address', 200)
            ->requirePresence('site_address', 'create')
            ->notEmptyString('site_address');

        $validator
            ->scalar('site_postcode')
            ->maxLength('site_postcode', 4)
            ->requirePresence('site_postcode', 'create')
            ->notEmptyString('site_postcode');

        $validator
            ->scalar('site_contact')
            ->maxLength('site_contact', 50)
            ->requirePresence('site_contact', 'create')
            ->notEmptyString('site_contact');

        $validator
            ->scalar('site_contact_no')
            ->maxLength('site_contact_no', 15)
            ->requirePresence('site_contact_no', 'create')
            ->notEmptyString('site_contact_no');

        $validator
            ->scalar('site_ph_no')
            ->maxLength('site_ph_no', 20)
            ->requirePresence('site_ph_no', 'create')
            ->notEmptyString('site_ph_no');

        $validator
            ->scalar('site_contact_direct_ph_no')
            ->maxLength('site_contact_direct_ph_no', 20)
            ->requirePresence('site_contact_direct_ph_no', 'create')
            ->notEmptyString('site_contact_direct_ph_no');

        $validator
            ->scalar('site_lga')
            ->maxLength('site_lga', 100)
            ->requirePresence('site_lga', 'create')
            ->notEmptyString('site_lga');

        $validator
            ->scalar('site_dhhs_area')
            ->maxLength('site_dhhs_area', 100)
            ->requirePresence('site_dhhs_area', 'create')
            ->notEmptyString('site_dhhs_area');

        return $validator;
    }
}
