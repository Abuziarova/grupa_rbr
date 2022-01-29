<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

            DB::table("post")->insert([
           
                'title' => $faker->title,
                'content' => $faker->paragraph,
                "author" => $faker->name(),
            ]);

        }

       
    }
}
