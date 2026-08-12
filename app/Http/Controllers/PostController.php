<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => "Laravel", 'posted_by' => 'Ahmad', 'created_at' => '26-aug-03'],
            ['id' => 2, 'title' => "JS", 'posted_by' => 'Odeh', 'created_at' => '26-aug-01'],
        ];

        return view("test", [
            "posts" => $posts,
        ]);
    }
}