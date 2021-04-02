<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrsTable Test Case
 */
class PrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrsTable
     */
    public $Prs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Prs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Prs') ? [] : ['className' => PrsTable::class];
        $this->Prs = TableRegistry::getTableLocator()->get('Prs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prs);

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
