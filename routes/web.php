<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/AdminHome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::POST('/api/register', [App\Http\Controllers\AuthController::class, 'register']);
// Route::get('/{pathMatch}', function(){return view('welcome');})->where('pathMatch',".*");


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);

