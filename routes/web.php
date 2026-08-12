<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test" , function(){
    $posts = [
        ['id' => 1, 'title' => "Laravel", 'posted_by' => 'Ahmad', 'created_at' => '26-aug-03'],
        ['id' => 2, 'title' => "JS", 'posted_by' => 'Odeh', 'created_at' => '26-aug-01'],
    ];
    return view("test",[
        "posts" => $posts,
    ]);
});

