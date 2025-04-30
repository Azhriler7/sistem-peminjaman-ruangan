<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\RequestPasswordController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\Auth;


// ========== AUTH ==========
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ========== LUPA PASSWORD ==========
Route::get('/forgot-password', [RequestPasswordController::class, 'showForm'])->name('forgot-password');
Route::post('/forgot-password', [RequestPasswordController::class, 'submitRequest'])->name('forgot-password.submit');

// ========== USER ==========
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/peminjaman', [UserController::class, 'peminjamanForm'])->name('user.peminjaman');
    Route::post('/peminjaman', [UserController::class, 'submitPeminjaman'])->name('user.peminjaman.submit');

    Route::get('/user/data-pinjaman', [UserController::class, 'dataPinjaman'])->name('user.data-pinjaman');


    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class, 'updateProfile'])->name('user.profile.update');

    Route::get('/kalender', [UserController::class, 'kalender'])->name('user.kalender');
    Route::get('/history', [HistoryController::class, 'userHistory'])->name('user.history');
    Route::get('/gedung', [UserController::class, 'gedung'])->name('user.gedung');

    // Tambahkan di dalam Route::prefix('user')->group(...)

Route::get('/ruangan/aula', [UserController::class, 'ruanganAula'])->name('user.ruangan-aula');
Route::get('/ruangan/dekanat', [UserController::class, 'ruanganDekanat'])->name('user.ruangan-dekanat');
Route::get('/ruangan/vicon', [UserController::class, 'ruanganVicon'])->name('user.ruangan-vicon');
Route::get('/ruangan/coe', [UserController::class, 'ruanganCoE'])->name('user.ruangan-coe');
Route::get('/ruangan/u', [UserController::class, 'ruanganU'])->name('user.ruangan-U');
Route::get('/ruangan/labkom', [UserController::class, 'ruanganLabKom'])->name('user.ruangan-LabKom');

Route::get('/pengajuan', [UserController::class, 'pengajuan'])->name('user.pengajuan');


});

// ========== ADMIN ==========
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

    // Peminjaman
    Route::get('/peminjaman', [AdminController::class, 'listPeminjaman'])->name('admin.peminjaman');

    // Riwayat & Export
    Route::get('/history', [HistoryController::class, 'adminHistory'])->name('admin.history');
    Route::get('/history/export/pdf', [HistoryController::class, 'exportPdf'])->name('admin.history.export.pdf');
    Route::get('/history/export/csv', [HistoryController::class, 'exportCsv'])->name('admin.history.export.csv');

    // Manajemen Gedung & Ruangan
    Route::get('/gedung', [RuanganController::class, 'index'])->name('admin.gedung');
    Route::get('/gedung/create', [RuanganController::class, 'create'])->name('admin.gedung.create');
    Route::post('/gedung/store', [RuanganController::class, 'store'])->name('admin.gedung.store');
    Route::get('/gedung/edit/{id_ruang}', [RuanganController::class, 'edit'])->where('id_ruang', '[0-9]+')->name('admin.gedung.edit');
    Route::put('/gedung/update/{id_ruang}', [RuanganController::class, 'update'])->where('id_ruang', '[0-9]+')->name('admin.gedung.update');
    Route::delete('/gedung/delete/{id_ruang}', [RuanganController::class, 'destroy'])->where('id_ruang', '[0-9]+')->name('admin.gedung.delete');

    // Notifikasi
    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('admin.notifikasi');
});
