<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramTypeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramTypeTable Test Case
 */
class ProgramTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramTypeTable
     */
    protected $ProgramType;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProgramType',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProgramType') ? [] : ['className' => ProgramTypeTable::class];
        $this->ProgramType = $this->getTableLocator()->get('ProgramType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProgramType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProgramTypeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
