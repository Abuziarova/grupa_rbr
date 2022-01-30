<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Post;
use App\Models\Comment;

class ApiServiceController extends Controller
{
    function __construct() {
        $this->client = new \GuzzleHttp\Client();
    }

    public function postCreate($title, $content, $author)
    {
 
        $response =$this->client->post('http://localhost:8001/api/posts/', [
            'form_params' => [
                'title' => $title,
                'content' => $content,
                'author' => $author
            ]
        ]);
        $response = $response->getBody()->getContents();
        return $response;
    }

    public function postShow($id)
    {
        $response =$this->client->get('http://localhost:8001/api/posts/'.$id);
        $response = $response->getBody()->getContents();

        return $response;
    }

    public function postUpdate($id, $title=null, $content=null, $author=null) 
    {
        $post = Post::find($id);
        if ($title == null) {
            $title =  $post->title;
        };
        if ($content == null) {
            $content =  $post->content;
        };
        if ($author == null) {
            $author =  $post->author;
        };
        
        $response =$this->client->put('http://localhost:8001/api/posts/'.$id, [
            'form_params' => [
                'title' => $title,
                'content' => $content,
                'author' => $author
            ]
        ]);
        $response = $response->getBody()->getContents();

        return $response;
    }

    public function postDelete($id)
    {
        $response =$this->client->delete('http://localhost:8001/api/posts/'.$id);
        $response = $response->getBody()->getContents();
    
        return $response;
    }
    

    public function commentCreate($post_id, $content, $author)
    {
        $response =$this->client->post('http://localhost:8001/api/comments/', [
            'form_params' => [
                'post_id' => $post_id,
                'content' => $content,
                'author' => $author
            ]
        ]);
        $response = $response->getBody()->getContents();
        return $response;
    }

    public function  commentShow($id)
    {
        $response =$this->client->get('http://localhost:8001/api/comments/'.$id);
        $response = $response->getBody()->getContents();

        return $response;
    }

    public function commentUpdate($id, $post_id = null, $content = null, $author = null) 
    {
        $comment = Comment::find($id);
        if ($post_id == null) {
            $post_id = $comment ->post_id;
        };
        if ($content == null) {
            $content = $comment ->content;
        };
        if ($author == null) {
            $author = $comment ->author;
        };
        
        $response =$this->client->put('http://localhost:8001/api/comments/'.$id, [
            'form_params' => [
                'post_id' => $post_id,
                'content' => $content,
                'author' => $author
            ]
        ]);
        $response = $response->getBody()->getContents();

        return $response;
    }

    public function commentDelete($id)
    {   
        $response =$this->client->delete('http://localhost:8001/api/comments/'.$id);
        $response = $response->getBody()->getContents();
        return $response;
    }
}