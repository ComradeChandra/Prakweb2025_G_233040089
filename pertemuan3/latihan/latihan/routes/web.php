<?php

use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// route ke halaman posts
Route::get('/posts', [PostController::class, 'index']);

// route ke halaman categories
Route::get('/categories', [CategoryController::class, 'index']); 

// Route buat liat detail satu postingan (pake slug)
Route::get('/posts/{post:slug}', [PostController::class, 'show']);