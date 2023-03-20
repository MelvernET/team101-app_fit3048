<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClustersFixture
 */
class ClustersFixture extends TestFixture
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
                'cluster_id' => 1,
                'cluster_name' => 'Lorem ipsum dolor sit amet',
                'cluster_executive_manager' => 'Lorem ipsum dolor sit amet',
                'division_id' => 1,
            ],
        ];
        parent::init();
    }
}
