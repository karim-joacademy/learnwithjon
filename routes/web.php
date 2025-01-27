<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'home')->name('home');
Route::view('/posts', 'posts.index')->name('posts');
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
