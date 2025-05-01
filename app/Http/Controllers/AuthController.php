<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('pages.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Ambil data login
        $credentials = $request->only('email', 'password');

        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // untuk keamanan session hijacking
            $role = Auth::user()->role;

            return redirect()->route($role === 'admin' ? 'admin.dashboard' : 'user.dashboard');
        }

        return back()->withErrors([
            'login' => 'Login gagal. Email atau password salah.',
        ])->withInput(); // Kembalikan input sebelumnya
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
}
