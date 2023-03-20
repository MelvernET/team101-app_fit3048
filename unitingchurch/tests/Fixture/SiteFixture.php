<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SiteFixture
 */
class SiteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'site';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'site_id' => 1,
                'site_address' => 'Lorem ipsum dolor sit amet',
                'site_postcode' => 'Lo',
                'site_contact' => 'Lorem ipsum dolor sit amet',
                'site_contact_no' => 'Lorem ipsum d',
                'site_ph_no' => 'Lorem ipsum dolor ',
                'site_contact_direct_ph_no' => 'Lorem ipsum dolor ',
                'site_lga' => 'Lorem ipsum dolor sit amet',
                'site_dhhs_area' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
