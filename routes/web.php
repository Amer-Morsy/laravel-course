<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');

Route::get('/car/watchList', [CarController::class, 'watchList'])->name('car.watchList');

Route::resource('car', CarController::class);

Route::get('/sign-up', [SignupController::class, 'create'])->name('signup');

Route::get('/login', [LoginController::class, 'create'])->name('login');

