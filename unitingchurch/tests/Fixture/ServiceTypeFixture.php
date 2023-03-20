<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceTypeFixture
 */
class ServiceTypeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service_type';
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
