<?php

use Illuminate\Support\Facades\Route;
use App\Http\Admin\Main\HomeController;

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
});
//
//Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
//    Route::group(['namespace' => 'Main'], function () {
//        Route::get('/', 'HomeController')->name('home');
//    });
//});

//Route::get('/', [\App\Http\Admin\main\HomeController::class, 'index']);
//Route::get('/signup', [\App\Http\Admin\main\HomeController::class, 'index']);
//Route::get('/login', [\App\Http\Admin\main\HomeController::class, 'index']);
