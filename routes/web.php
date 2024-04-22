<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [FirstController::class , 'index']);

Route::get('/post/{id}', [PostController::class , 'get_post']);
Route::get('/posts', [PostController::class , 'get_posts']);
Route::get('/posts/publish', [PostController::class , 'get_posts_by_publish']);
Route::get('/posts/create', [PostController::class , 'posts_create']);
Route::get('/post/update/{id}', [PostController::class , 'post_update']);
Route::get('/post/delete/{id}', [PostController::class , 'post_delete']);
Route::get('/post/restore/{id}', [PostController::class , 'post_restore']);
