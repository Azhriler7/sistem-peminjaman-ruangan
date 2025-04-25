<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pages/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/pages/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/akun-user', function () {
    return view('pages.akun-user');
})->name('akun_user'); 
Route::get('/ruang-aula', function () {
    return view('pages.ruang-aula');
})->name('ruang.aula');


require __DIR__.'/auth.php';
