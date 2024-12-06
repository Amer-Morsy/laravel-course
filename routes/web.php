<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sign-up', [SignupController::class, 'create'])->name('signup');

Route::get('/login', [LoginController::class, 'create'])->name('login');

