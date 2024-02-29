<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect()->route('home');
})->middleware('auth'); 

// authentication routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class,'login'])->name('auth.login');
    Route::post('/login', [AuthController::class,'postLogin'])->name('auth.login');
    Route::get('/logout', [AuthController::class,'logout'])->name('auth.logout');
    Route::get('/register', [AuthController::class,'register'])->name('auth.register');
    Route::get('/recovery', [AuthController::class,'recovery'])->name('auth.recovery');
    Route::get('/recovery-confirmation', [AuthController::class,'recoveryConfirmation'])->name('auth.recoveryConfirmation');
});


// protected routes
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'app'], function () {
       Route::get('/', [HomeController::class,"index"])->name('app.home');
    });
});


