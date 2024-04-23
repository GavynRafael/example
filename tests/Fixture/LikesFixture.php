<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LikesFixture
 */
class LikesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'photo_id' => 1,
                'user_id' => 1,
                'created' => '2024-04-23 11:36:54',
                'modified' => '2024-04-23 11:36:54',
            ],
        ];
        parent::init();
    }
}
