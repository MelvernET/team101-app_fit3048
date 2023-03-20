<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceTypeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceTypeTable Test Case
 */
class ServiceTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceTypeTable
     */
    protected $ServiceType;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ServiceType',
        'app.ServiceStream',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ServiceType') ? [] : ['className' => ServiceTypeTable::class];
        $this->ServiceType = $this->getTableLocator()->get('ServiceType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ServiceType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServiceTypeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ServiceTypeTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
