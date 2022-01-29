<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Comment extends Model
{
    $faker = \Faker\Factory::create();
    for($i=0; $i<20; $i++) {
        Comment::create(array(
            'post_id' => $faker->numberBetween(1, 50),
            'content' => $faker->paragraph,
            "author" => $faker->name(),
        ));
    }
}
