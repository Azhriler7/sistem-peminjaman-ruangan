<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProfileController;

// === Auth Routes ===
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'submitForgotForm'])->name('password.submit');

// === User Routes (pakai role dan auth) ===
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/peminjaman', [UserController::class, 'peminjamanForm'])->name('user.peminjaman');
    Route::post('/user/peminjaman', [UserController::class, 'submitPeminjaman'])->name('user.peminjaman.submit');
    
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/user/profile', [UserController::class, 'updateProfile'])->name('user.profile.update');

    Route::get('/user/ruangan', [UserController::class, 'ruangan'])->name('user.ruangan');

// === Admin Routes (pakai role dan auth) ===
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/peminjaman', [AdminController::class, 'listPeminjaman'])->name('admin.peminjaman');
    
    Route::get('/admin/ruangan', [AdminController::class, 'indexRuangan'])->name('admin.ruangan');
    Route::get('/admin/ruangan/tambah', [AdminController::class, 'createRuangan'])->name('admin.ruangan.create');
    Route::post('/admin/ruangan', [AdminController::class, 'storeRuangan'])->name('admin.ruangan.store');
    Route::get('/admin/ruangan/{id}/edit', [AdminController::class, 'editRuangan'])->name('admin.ruangan.edit');
    Route::put('/admin/ruangan/{id}', [AdminController::class, 'updateRuangan'])->name('admin.ruangan.update');
    Route::delete('/admin/ruangan/{id}', [AdminController::class, 'deleteRuangan'])->name('admin.ruangan.delete');

    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
});

    // Route untuk halaman detail ruangan
    Route::get('/user/ruang-aula', function () {
        return view('pages.user.ruang-aula');
    })->name('user.ruangan-aula');

    Route::get('/user/ruang-dekanat', function () {
        return view('pages.user.ruang-dekanat');
    })->name('user.ruangan-dekanat');

    Route::get('/user/ruang-vicon', function () {
        return view('pages.user.ruang-vicon');
    })->name('user.ruangan-vicon');

    Route::get('/user/ruang-coe', function () {
        return view('pages.user.ruang-coe');
    })->name('user.ruangan-coe');

    Route::get('/user/ruang-U', function () {
        return view('pages.user.ruang-U');
    })->name('user.ruangan-U');

    Route::get('/user/ruang-LabKom', function () {
        return view('pages.user.ruang-LabKom');
    })->name('user.ruangan-LabKom');

    Route::get('/user/pengajuan', function () {
        return view('pages.user.pengajuan');
    })->name('user.pengajuan');

    // Route tambahan untuk lihat daftar pinjaman
    Route::get('/user/peminjaman', function () {
        return view('pages.user.peminjaman');
    })->name('user.peminjaman.saya');
});

