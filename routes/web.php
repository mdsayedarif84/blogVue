<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/AdminHome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::POST('/api/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::get('/{pathMatch}', function(){return view('welcome');})->where('pathMatch',".*");


