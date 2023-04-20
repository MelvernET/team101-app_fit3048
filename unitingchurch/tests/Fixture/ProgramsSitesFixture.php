<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramsSitesFixture
 */
class ProgramsSitesFixture extends TestFixture
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
                'id' => 1,
                'program_id' => 1,
                'site_id' => 1,
            ],
        ];
        parent::init();
    }
}
