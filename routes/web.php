<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/trash', [PostController:: class, 'trashed'])->name('posts.trashed');
Route::get('post/{id}/restore', [PostController::class,'restore'])->name('post.restore');

Route::resource('posts', PostController::class);
