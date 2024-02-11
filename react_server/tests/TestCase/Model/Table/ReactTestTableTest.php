<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReactTestTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReactTestTable Test Case
 */
class ReactTestTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReactTestTable
     */
    protected $ReactTest;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ReactTest',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ReactTest') ? [] : ['className' => ReactTestTable::class];
        $this->ReactTest = $this->getTableLocator()->get('ReactTest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ReactTest);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReactTestTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
