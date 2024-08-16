<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/trash', [PostController:: class, 'trashed'])->name('posts.trashed');
Route::get('post/{id}/restore', [PostController::class,'restore'])->name('post.restore');
Route::delete('post/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');

Route::resource('posts', PostController::class);
