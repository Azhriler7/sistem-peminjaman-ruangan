<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\RequestPasswordController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/peminjaman', [UserController::class, 'peminjamanForm'])->name('peminjaman.form');
    Route::post('/peminjaman', [UserController::class, 'submitPeminjaman'])->name('peminjaman.store');
    Route::get('/data_pinjaman_user', [PeminjamanController::class, 'dataPinjaman'])->name('user.data-pinjaman');

    // ✅ Profile User
    Route::get('/profile', [ProfileController::class, 'show'])->name('user.profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('user.profile.update');

    Route::get('/kalender', [UserController::class, 'kalender'])->name('user.kalender');
    Route::get('/history', [HistoryController::class, 'userHistory'])->name('user.history');
    Route::get('/gedung', [UserController::class, 'gedung'])->name('user.gedung');

    // Ruangan
    Route::get('/ruangan/aula', [UserController::class, 'ruanganAula'])->name('user.ruangan-aula');
    Route::get('/ruangan/dekanat', [UserController::class, 'ruanganDekanat'])->name('user.ruangan-dekanat');
    Route::get('/ruangan/vicon', [UserController::class, 'ruanganVicon'])->name('user.ruangan-vicon');
    Route::get('/ruangan/coe', [UserController::class, 'ruanganCoE'])->name('user.ruangan-coe');
    Route::get('/ruangan/u', [UserController::class, 'ruanganU'])->name('user.ruangan-U');
    Route::get('/ruangan/labkom', [UserController::class, 'ruanganLabKom'])->name('user.ruangan-LabKom');

    Route::get('/pengajuan', [PeminjamanController::class, 'create'])->name('user.pengajuan.create');
    Route::post('/pengajuan', [PeminjamanController::class, 'store'])->name('user.pengajuan');
    Route::get('/data_pinjaman_user', [PeminjamanController::class, 'dataPinjaman'])->name('user.data-pinjaman');

});

// ========== ADMIN ==========
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

    // ✅ Profile Admin
    Route::get('/profile', [ProfileController::class, 'show'])->name('admin.profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');

    Route::get('/peminjaman', [AdminController::class, 'dataPeminjaman'])->name('admin.peminjaman');

    //data pinjaman
    Route::get('data-pinjaman', [AdminController::class, 'dataPinjamanAdmin'])->name('admin.data.pinjaman');

    // Riwayat & Export
    Route::get('/history', [HistoryController::class, 'adminHistory'])->name('admin.history');
    Route::get('/history/export/pdf', [HistoryController::class, 'exportPdf'])->name('admin.history.export.pdf');
    Route::get('/history/export/csv', [HistoryController::class, 'exportCsv'])->name('admin.history.export.csv');

    // Manajemen Ruangan
    Route::get('/ruangan', [RuanganController::class, 'index'])->name('admin.ruangan');
    Route::get('/ruangan/create', [RuanganController::class, 'create'])->name('admin.ruangan.create');
    Route::post('/ruangan/store', [RuanganController::class, 'store'])->name('admin.ruangan.store');
    Route::get('/ruangan/edit/{id}', [RuanganController::class, 'edit'])->name('admin.ruangan.edit');
    Route::put('/ruangan/update/{id}', [RuanganController::class, 'update'])->name('admin.ruangan.update');
    Route::delete('/ruangan/delete/{id}', [RuanganController::class, 'destroy'])->name('admin.ruangan.delete');

    //pengajuan
    Route::get('/pengajuan', [UserController::class, 'pengajuan'])->name('user.pengajuan');

    // Notifikasi
    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('admin.notifikasi');
    Route::post('/notifikasi/{id}/read', [NotifikasiController::class, 'markAsRead'])->name('admin.notifikasi.read');

    // Kontak
    Route::get('/dashboard#contact', [AdminController::class,'adminDashboard'])->name('admin.dashboard#contact');
});

