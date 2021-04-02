<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeminarAppTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeminarAppTable Test Case
 */
class SeminarAppTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SeminarAppTable
     */
    public $SeminarApp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SeminarApp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SeminarApp') ? [] : ['className' => SeminarAppTable::class];
        $this->SeminarApp = TableRegistry::getTableLocator()->get('SeminarApp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SeminarApp);

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
