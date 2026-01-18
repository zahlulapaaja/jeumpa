<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SharedFilesController;
use App\Models\SharedFiles;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication 
Route::prefix('auth')->name('auth.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

        // Google SSO
        Route::get('/google', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
        Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});

// Home 
// Route::middleware('auth')->group(function () {
Route::get('/', [HomeController::class, 'index'])->name('home');
// });

// SNLIK
Route::prefix('snlik')->name('snlik.')->group(function () {
    Route::get('/', [SharedFilesController::class, 'index'])->name('shared_files');
});
