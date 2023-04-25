<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SitesFixture
 */
class SitesFixture extends TestFixture
{
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
                'site_address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'site_postcode' => 'Lo',
                'site_contact' => 'Lorem ipsum dolor sit amet',
                'site_contact_no' => 'Lorem ipsum d',
                'site_ph_no' => 'Lorem ipsum dolor ',
                'site_contact_direct_ph_no' => 'Lorem ipsum dolor ',
                'site_lga' => 'Lorem ipsum dolor sit amet',
                'site_dhhs_area' => 'Lorem ipsum dolor sit amet',
                'site_longitude' => 'Lorem ipsum dolor sit amet',
                'site_latitude' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
