<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentApiController extends Controller
{
    public function index()
    {
       return Comment::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|integer',
            'content' => 'required',
            'author' => 'required'
        ]);
        return Comment::create($request->all());
    }

    public function show($id)
    {
        return Comment::find($id);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->update($request->all());
        return $comment;
    }

    public function destroy($id)
    {
        return Comment::destroy($id);
    }
}
