<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientFixture
 */
class ClientFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'client';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'client_id' => 1,
                'client_first_name' => 'Lorem ipsum dolor sit amet',
                'client_last_name' => 'Lorem ipsum dolor sit amet',
                'client_location' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
