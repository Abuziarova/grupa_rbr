<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostApiController;
use App\Http\Controllers\CommentApiController;
use App\Http\Controllers\AddUserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('posts', PostApiController::class);
Route::resource('comments', CommentApiController::class);

Route::post('/adduser', [App\Http\Controllers\AddUserController::class, 'register'])->name('user.register');