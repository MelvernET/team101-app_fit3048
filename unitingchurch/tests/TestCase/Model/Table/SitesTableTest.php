<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SitesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SitesTable Test Case
 */
class SitesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SitesTable
     */
    protected $Sites;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Sites') ? [] : ['className' => SitesTable::class];
        $this->Sites = $this->getTableLocator()->get('Sites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sites);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SitesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
