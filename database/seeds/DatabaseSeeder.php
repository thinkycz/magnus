<?php

use App\Category;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(['email' => 'leo@nulisec.com']);

        factory(Category::class)->create(['name' => 'Luyện nghe tiếng Séc', 'slug' => 'luyen-nghe-tieng-sec']);
        factory(Category::class)->create(['name' => 'Luyện nói tiếng Séc', 'slug' => 'luyen-noi-tieng-sec']);
        factory(Category::class)->create(['name' => 'Phát âm tiếng Séc', 'slug' => 'phat-am-tieng-sec']);
        factory(Category::class)->create(['name' => 'Ngữ pháp tiếng Séc', 'slug' => 'ngu-phap-tieng-sec']);
        factory(Category::class)->create(['name' => 'Về TT Magnus', 'slug' => 've-tt-magnus']);
    }
}
