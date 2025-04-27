<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('pages.user.dashboard');
    }

    public function peminjamanForm()
    {
        return view('pages.user.peminjaman');
    }

    public function submitPeminjaman(Request $request)
    {
        // Simpan ke tabel pinjaman
        // validasi, simpan, dan redirect
        return redirect()->route('user.peminjaman')->with('success', 'Peminjaman berhasil diajukan');
    }

    public function kalender()
    {
        return view('pages.user.kalender');
    }

    public function history()
    {
        return view('pages.user.history');
    }

    public function profile()
    {
        return view('pages.user.profile');
    }

    public function updateProfile(Request $request)
    {

        $user = \App\Models\User::find(Auth::id());

        // Validasi inputan
        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update data user
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->nim = $request->input('nim');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        // Jika ada foto profil yang di-upload
        if ($request->hasFile('profile_picture')) {
            $imageName = time().'.'.$request->profile_picture->extension();
            $request->profile_picture->move(public_path('images/profile_pictures'), $imageName);
            $user->profile_picture = 'images/profile_pictures/'.$imageName;
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui');
    }

    public function gedung()
    {
        return view('pages.user.gedung');
    }

    
}
