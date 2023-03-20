<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceStreamTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceStreamTable Test Case
 */
class ServiceStreamTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceStreamTable
     */
    protected $ServiceStream;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('ServiceStream') ? [] : ['className' => ServiceStreamTable::class];
        $this->ServiceStream = $this->getTableLocator()->get('ServiceStream', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ServiceStream);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServiceStreamTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
