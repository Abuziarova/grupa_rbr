<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<50; $i++) {
            Post::create(array(
                'title' => $faker->title,
                'content' => $faker->paragraph,
                "author" => $faker->name(),
            ));
        }
        for($i=0; $i<20; $i++) {
            Comment::create(array(
                'post_id' => $faker->numberBetween(1, 50),,
                'content' => $faker->paragraph,
                "author" => $faker->name(),
            ));
        }
    }
}
