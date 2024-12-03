<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCarController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/car', [CarController::class, 'index']);

route::get('/invoke', ShowCarController::class);

Route::get('/car/invoke', CarController::class);

//Route::resource('products', ProductController::class)->except(['destroy']);
//Route::resource('products', ProductController::class)->only(['index', 'show']);
//Route::apiResource('products', ProductController::class);

//Route::apiResource('orders', OrderController::class);

Route::apiResources([
    'products' => ProductController::class,
    'orders' => OrderController::class
]);

Route::controller(MathController::class)->prefix('math')->group(function () {
    Route::get('/sum/{a}/{b}', 'sum')->whereNumber(['a', 'b']);
    Route::get('/sub/{a}/{b}', 'subtraction')->whereNumber(['a', 'b']);
});

Route::fallback(function () {
    return "Handel Fallback";
});
