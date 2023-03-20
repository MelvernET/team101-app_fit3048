<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceFixture
 */
class ServiceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'service_id' => 1,
                'service_description' => 'Lorem ipsum dolor sit amet',
                'service_active_client' => 1,
                'service_staff_number' => 1,
                'service_fte' => 1,
                'service_riskman_id' => 1,
                'program_id' => 1,
                'service_type_id' => 1,
            ],
        ];
        parent::init();
    }
}
