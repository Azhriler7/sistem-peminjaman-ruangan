<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Arahkan root langsung ke halaman login
Route::get('/', fn() => redirect()->route('login'));

// Halaman Login
Route::get('/pages/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses Login
Route::post('/pages/login', [AuthController::class, 'login']);

// Dashboard User (setelah login)
Route::get('/dashboard', fn() => view('index'))->middleware('auth');

// Halaman beranda test (lihat index.blade tanpa login)
Route::get('/beranda', fn() => view('index')); // Hapus nanti setelah live

// Dashboard Admin (nanti middleware admin ditambah)
Route::get('/admin', fn() => view('admin'))->middleware('auth');

// Halaman Detail Ruangan (seperti Aula)
Route::get('/ruang-aula', fn() => view('pages.ruang-aula'))->name('ruang.aula');
Route::get('/ruang-br', fn() => view('pages.ruang-br'))->name('ruang.br');

// Formulir Peminjaman 
Route::get('/peminjaman', function () {
    return view('pages.peminjaman'); 
})->name('peminjaman');

Route::get('/data_pinjaman', fn() => view('pages.data_pinjaman'))->name('data.pinjaman');

// Auth scaffolding (default Laravel)
require __DIR__.'/auth.php';
