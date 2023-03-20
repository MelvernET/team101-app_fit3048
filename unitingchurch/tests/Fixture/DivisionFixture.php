<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DivisionFixture
 */
class DivisionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'division';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'divison_id' => 1,
                'division_name' => 'Lorem ipsum dolor sit amet',
                'division_general_manager' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
