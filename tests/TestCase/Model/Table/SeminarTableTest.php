<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeminarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeminarTable Test Case
 */
class SeminarTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SeminarTable
     */
    public $Seminar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Seminar',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Seminar') ? [] : ['className' => SeminarTable::class];
        $this->Seminar = TableRegistry::getTableLocator()->get('Seminar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seminar);

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
