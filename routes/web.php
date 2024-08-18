<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/trash', [PostController:: class, 'trashed'])->name('posts.trashed');
Route::get('post/{id}/restore', [PostController::class,'restore'])->name('post.restore');
Route::delete('post/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');

Route::resource('posts', PostController::class);

Route::get('forget-cache', function(){

    Cache::forget('posts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

