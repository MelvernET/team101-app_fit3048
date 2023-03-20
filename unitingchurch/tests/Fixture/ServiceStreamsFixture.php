<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceStreamsFixture
 */
class ServiceStreamsFixture extends TestFixture
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
                'service_stream_id' => 1,
                'service_stream_name_' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
