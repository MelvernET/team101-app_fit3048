<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecordFixture
 */
class RecordFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'record';
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
                'record_date_time' => '2023-03-20 04:56:52',
            ],
        ];
        parent::init();
    }
}
