<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect()->route('home');
})->middleware('auth'); 

// authentication routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class,'login'])->name('auth.login');
Route::get('/register', [AuthController::class,'register'])->name('auth.register');
Route::get('/recovery', [AuthController::class,'recovery'])->name('auth.recovery');
Route::get('/recovery-confirmation', [AuthController::class,'recoveryConfirmation'])->name('auth.recovery-confirmation');
});


// protected routes
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'app'], function () {
       Route::get('/', function () {
           return view('home');
       })->name('home');
    });
});


