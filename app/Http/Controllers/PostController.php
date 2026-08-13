<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view("posts.index", [
            "posts" => $posts,
        ]);
    }

    public function show($post)
    {

        $post = ['id' => 1, 'title' => "Laravel", 'description' => "this is description", 'posted_by' => 'Ahmad', 'created_at' => '26-aug-03'];

        return view("posts.show", ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(){
        
    }
}
