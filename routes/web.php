<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pages/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/pages/register', [AuthController::class, 'showRegisterForm'])->name('register');

require __DIR__.'/auth.php';
