<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProfileController;

// === Auth ===
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'submitForgotForm'])->name('password.submit');

// === User Routes ===
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/peminjaman', [UserController::class, 'peminjamanForm'])->name('user.peminjaman');
    Route::post('/user/peminjaman', [UserController::class, 'submitPeminjaman'])->name('user.peminjaman.submit');
    
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/user/profile', [UserController::class, 'updateProfile'])->name('user.profile.update');

    Route::get('/user/ruangan', [UserController::class, 'ruangan'])->name('user.ruangan');
});

// === Admin Routes ===
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/peminjaman', [AdminController::class, 'listPeminjaman'])->name('admin.peminjaman');
    Route::get('/admin/ruangan', [AdminController::class, 'indexRuangan'])->name('admin.ruangan');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/admin/notifikasi', [AdminController::class, 'notifikasi'])->name('admin.notifikasi');
   });
