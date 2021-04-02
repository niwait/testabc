<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubscribeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubscribeTable Test Case
 */
class SubscribeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubscribeTable
     */
    public $Subscribe;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Subscribe',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Subscribe') ? [] : ['className' => SubscribeTable::class];
        $this->Subscribe = TableRegistry::getTableLocator()->get('Subscribe', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subscribe);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
