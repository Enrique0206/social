<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WallsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WallsTable Test Case
 */
class WallsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WallsTable
     */
    public $Walls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.walls',
        'app.users',
        'app.friends',
        'app.likes',
        'app.posts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Walls') ? [] : ['className' => WallsTable::class];
        $this->Walls = TableRegistry::get('Walls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Walls);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
