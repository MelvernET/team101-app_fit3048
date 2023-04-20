<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramsSitesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramsSitesTable Test Case
 */
class ProgramsSitesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramsSitesTable
     */
    protected $ProgramsSites;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProgramsSites',
        'app.Programs',
        'app.Sites',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProgramsSites') ? [] : ['className' => ProgramsSitesTable::class];
        $this->ProgramsSites = $this->getTableLocator()->get('ProgramsSites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProgramsSites);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProgramsSitesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProgramsSitesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
