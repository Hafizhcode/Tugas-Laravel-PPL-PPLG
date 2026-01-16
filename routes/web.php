<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

Route::get('/', function () {
    return view('welcome');
});

// Route menggunakan Controller
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/about-me', [PostController::class, 'about'])->name('posts.about');

Route::get('/profil/{id}', [SekolahController::class, 'show']);
