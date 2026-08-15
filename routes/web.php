<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/test2', [TestController::class, 'testAction']); // example




Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get("/posts", [PostController::class, 'index'])->name('posts.index');

Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::get("/posts/{post}", [PostController::class, 'show'])->name('posts.show');

Route::get('/posts.create', [PostController::class, 'create'])->name('posts.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
