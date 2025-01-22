<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

Route::view('/', 'home')->name('home');
Route::view('/posts', 'posts.index');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
