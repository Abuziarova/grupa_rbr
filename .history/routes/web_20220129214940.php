<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/',  [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/post/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/users', [App\Http\Controllers\UserController::class, 'list'])->name('users.list');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('users');
