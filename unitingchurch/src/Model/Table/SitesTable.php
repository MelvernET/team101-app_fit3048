<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sites Model
 *
 * @property \App\Model\Table\ProgramsTable&\Cake\ORM\Association\BelongsToMany $Programs
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
class SitesTable extends Table
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

        $this->setTable('sites');
        $this->setDisplayField(['site_id','site_contact','site_address']);
        $this->setPrimaryKey('site_id');

        $this->belongsToMany('Programs', [
            'foreignKey' => 'site_id',
            'targetForeignKey' => 'program_id',
            'joinTable' => 'programs_sites',
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
            ->maxLength('site_address', 80)
            ->requirePresence('site_address', 'create')
            ->notEmptyString('site_address');

        $validator
            ->scalar('site_postcode')
            ->numeric('site_postcode')
            ->minLength('site_postcode', 4,'Postcode must be 4 digits.')
            ->maxLength('site_postcode', 4,'Postcode must be 4 digits.')
            ->requirePresence('site_postcode', 'create')
            ->notEmptyString('site_postcode')
            ->integer('site_postcode')
            ->greaterThanOrEqual('site_postcode', 0, 'Postcode must be positive.');
//        ->postal('postal_code', 'au', 'Please enter valid postcode.');


        $validator
            ->scalar('site_contact')
            ->maxLength('site_contact', 30)
            ->requirePresence('site_contact', 'create')
            ->notEmptyString('site_contact');

        $validator
            ->scalar('site_contact_no')
            ->minLength('site_contact_no',9)
            ->maxLength('site_contact_no', 15)
            ->requirePresence('site_contact_no', 'create')
            ->notEmptyString('site_contact_no')
            ->integer('site_contact_no')
            ->greaterThanOrEqual('site_contact_no', 0);

        $validator
            ->scalar('site_ph_no')
            ->minLength('site_ph_no',9)
            ->maxLength('site_ph_no', 15)
            ->requirePresence('site_ph_no', 'create')
            ->notEmptyString('site_ph_no')
            ->integer('site_ph_no')
            ->greaterThanOrEqual('site_ph_no', 0, 'Phone number must be positive.');

        $validator
            ->scalar('site_contact_direct_ph_no')
            ->minLength('site_contact_direct_ph_no',9)
            ->maxLength('site_contact_direct_ph_no', 15)
            ->requirePresence('site_contact_direct_ph_no', 'create')
            ->notEmptyString('site_contact_direct_ph_no')
            ->integer('site_contact_direct_ph_no')
            ->greaterThanOrEqual('site_contact_direct_ph_no', 0, 'Phone number must be positive.');

        $validator
            ->scalar('site_lga')
            ->maxLength('site_lga', 50)
            ->requirePresence('site_lga', 'create')
            ->notEmptyString('site_lga');
//            ->notNumeric('site_lga', 'The field cannot be a number');

        $validator
            ->scalar('site_dhhs_area')
            ->maxLength('site_dhhs_area', 50)
            ->requirePresence('site_dhhs_area', 'create')
            ->notEmptyString('site_dhhs_area');
//            ->notNumeric('site_dhhs_area', 'The field cannot be a number');
        $validator
            ->scalar('site_longitude')
            ->maxLength('site_longitude', 20)
            ->requirePresence('site_longitude', 'create')
            ->notEmptyString('site_longitude')
            ->integer('site_longitude')
            ->greaterThanOrEqual('value', 0, 'longitude must be positive.');
        $validator
            ->scalar('site_latitude')
            ->maxLength('site_latitude', 20)
            ->requirePresence('site_latitude', 'create')
            ->notEmptyString('site_latitude')
            ->integer('site_latitude')
            ->greaterThanOrEqual('value', 0, 'latitude must be positive.');

        return $validator;
    }


}
