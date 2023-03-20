<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramsFixture
 */
class ProgramsFixture extends TestFixture
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
                'program_id' => 1,
                'program_type_id' => 1,
                'program_name' => 'Lorem ipsum dolor sit amet',
                'program_manager' => 'Lorem ipsum dolor sit amet',
                'cluster_id' => 1,
            ],
        ];
        parent::init();
    }
}
