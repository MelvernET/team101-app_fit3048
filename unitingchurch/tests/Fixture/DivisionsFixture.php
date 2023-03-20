<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DivisionsFixture
 */
class DivisionsFixture extends TestFixture
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
                'division_id' => 1,
                'division_name' => 'Lorem ipsum dolor sit amet',
                'division_general_manager' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
