<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController};


Route::get('/', function () {
    return Auth::check() ? redirect('/dashboard') : redirect('/login');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// ✅ Authenticated routes (sudah login)
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home.page');
    })->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});