<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecordsFixture
 */
class RecordsFixture extends TestFixture
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
                'record_id' => 1,
                'user_id' => 1,
                'client_id' => 1,
                'record_info' => 'Lorem ipsum dolor sit amet',
                'record_date_time' => '2023-03-27 06:29:14',
            ],
        ];
        parent::init();
    }
}
