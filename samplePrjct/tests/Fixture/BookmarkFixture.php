<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookmarkFixture
 */
class BookmarkFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'bookmark';
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
                'url' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-01-03',
            ],
        ];
        parent::init();
    }
}
