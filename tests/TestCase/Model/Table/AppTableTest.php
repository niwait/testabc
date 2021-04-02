<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppTable Test Case
 */
class AppTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppTable
     */
    public $App;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.App',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('App') ? [] : ['className' => AppTable::class];
        $this->App = TableRegistry::getTableLocator()->get('App', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->App);

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
