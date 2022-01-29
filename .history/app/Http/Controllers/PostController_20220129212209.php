<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('post.list',['posts' => $posts] );
    }
    public function show($id)
    {
       $post = Post::find($id);
       $comments = $post->comments();
        return view('post.show', ['post' => $post, 'comments' => $comments] );
    }
}
