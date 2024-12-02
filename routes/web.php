<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;


Route::get('/', function () {
    $testUrl = route('test.sum', [1, 2]);
    dump($testUrl);
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'welcome']);

Route::name('test.')->prefix('test')->group(function () {
    Route::get('/sum/{a}/{b}', function ($a, $b) {
        return $a + $b;
    })->name('sum')->whereNumber(['a', 'b']);
});

Route::controller(MathController::class)->group(function () {
    Route::get('/sum/{a}/{b}', 'sum')->whereNumber(['a', 'b']);
    Route::get('/subtract/{a}/{b}', 'subtract')->whereNumber(['a', 'b']);
});

Route::fallback(function () {
    return 'fallback';
});
