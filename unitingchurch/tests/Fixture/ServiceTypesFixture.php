<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceTypesFixture
 */
class ServiceTypesFixture extends TestFixture
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
                'service_type_id' => 1,
                'service_type_name' => 'Lorem ipsum dolor sit amet',
                'service_stream_id' => 1,
            ],
        ];
        parent::init();
    }
}
