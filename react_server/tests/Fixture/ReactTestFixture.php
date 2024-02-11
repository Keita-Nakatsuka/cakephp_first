<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReactTestFixture
 */
class ReactTestFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'react_test';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-02-11 00:22:35',
                'modified' => '2024-02-11 00:22:35',
            ],
        ];
        parent::init();
    }
}
