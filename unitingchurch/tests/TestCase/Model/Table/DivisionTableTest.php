<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DivisionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DivisionTable Test Case
 */
class DivisionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DivisionTable
     */
    protected $Division;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Division',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Division') ? [] : ['className' => DivisionTable::class];
        $this->Division = $this->getTableLocator()->get('Division', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Division);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DivisionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
