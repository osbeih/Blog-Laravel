<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/test2', [TestController::class, 'testAction']); // example

Route::get("/posts" , [PostController::class, 'index']);

Route::get("/posts/{post}", [PostController::class, 'show']);