<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => "Laravel", 'description' => "this is description", 'posted_by' => 'Ahmad', 'created_at' => '26-aug-03'],
            ['id' => 2, 'title' => "JS", 'description' => "this is description", 'posted_by' => 'Odeh', 'created_at' => '26-aug-01'],
        ];

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
