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

Route::get('/',  [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/users', [App\Http\Controllers\UserController::class, 'list'])->name('users.list');
Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('users');
