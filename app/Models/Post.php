<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'title',
        'content',
        'author'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->get();
    }
}
