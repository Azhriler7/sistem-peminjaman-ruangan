<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Ruangan;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function listPeminjaman()
    {
        return view('pages.admin.peminjaman');
    }

    public function verifikasi(Request $request, $id)
    {
        // logika verifikasi peminjaman berdasarkan ID
        return back()->with('success', 'Status berhasil diperbarui');
    }

    public function kalender()
    {
        return view('pages.admin.kalender');
    }

    public function history()
    {
        return view('pages.admin.history');
    }

    public function indexRuangan()
    {
        return view('pages.admin.gedung.index');
    }

    public function createRuangan()
    {
        return view('pages.admin.gedung.create');
    }

    public function storeGedung(Request $request)
    {
        // validasi dan simpan gedung baru
        return redirect()->route('admin.gedung')->with('success', 'Gedung baru berhasil ditambahkan');
    }

    public function editRuangan($id)
    {
        return view('pages.admin.gedung.edit', compact('id'));
    }

    public function updateRuangan(Request $request, $id)
    {
        // update data gedung
        return redirect()->route('admin.gedung')->with('success', 'Gedung berhasil diperbarui');
    }

    public function deleteRuangan($id)
    {
        // hapus gedung
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return back()->with('success', 'Gedung berhasil dihapus');
    }

    public function notifikasi()
    {
        return view('pages.admin.notifikasi');
    }

    // ===============================
    // === Fitur Edit Profile Admin ===
    // ===============================

    public function profile()
    {
        return view('pages.admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());

        // Validasi inputan
        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update data user
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        // Jika ada foto profil yang di-upload
        if ($request->hasFile('profile_picture')) {
            $imageName = time().'.'.$request->profile_picture->extension();
            $request->profile_picture->move(public_path('images/profile_pictures'), $imageName);
            $user->profile_picture = 'images/profile_pictures/'.$imageName;
        }

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profil berhasil diperbarui');
    }
}
