<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GroupFixture
 */
class GroupFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'group';
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
                'g_name' => 'Lorem ipsum dolor sit amet',
                'g_executive_manager' => 'Lorem ipsum dolor sit amet',
                'divison_id' => 1,
            ],
        ];
        parent::init();
    }
}
