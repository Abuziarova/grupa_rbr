<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users' => DB::table('users')->paginate(15)
        ]);

        return view('posts', 'posts' => Post::paginate(10) );
    }
}
