<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdominsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdominsTable Test Case
 */
class AdominsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdominsTable
     */
    public $Adomins;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Adomins',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Adomins') ? [] : ['className' => AdominsTable::class];
        $this->Adomins = TableRegistry::getTableLocator()->get('Adomins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adomins);

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
