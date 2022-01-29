<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
                'title' => $faker->word,
                'content' => $faker->paragraph,
                "author" => $faker->name(),
            ));
        }
     
    }
}
