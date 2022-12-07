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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts', [App\Http\Controllers\PostController::class, 'store']);
Route::post('/posts/delete/{post:id}', [App\Http\Controllers\PostController::class, 'destroy']);
Route::patch('/posts/update/{post:id}', [App\Http\Controllers\PostController::class, 'update'])->name('update');

Route::get('/profile/{user:id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
Route::patch('/profile/update/{user:id}', [App\Http\Controllers\ProfileController::class, 'update']);
