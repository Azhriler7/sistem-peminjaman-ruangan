<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Ruangan; // Tambahkan ini!

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

    public function indexRuangan()
    {
        $ruangan = Ruangan::all();
        return view('pages.admin.ruangan.index', compact('ruangan'));
    }

    public function createRuangan()
    {
        return view('pages.admin.tambah-ruangan');
    }


    public function storeRuangan(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'fasilitas' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('ruangan', 'public');

        Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'gedung' => $request->gedung,
            'kapasitas' => $request->kapasitas,
            'fasilitas' => $request->fasilitas,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.ruangan')->with('success', 'Ruangan berhasil ditambahkan.');
    }

    public function editRuangan($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('pages.admin.ruangan.edit', compact('ruangan'));
    }

    public function updateRuangan(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);

        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'fasilitas' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('ruangan', 'public');
            $ruangan->gambar = $gambarPath;
        }

        $ruangan->update([
            'nama_ruangan' => $request->nama_ruangan,
            'gedung' => $request->gedung,
            'kapasitas' => $request->kapasitas,
            'fasilitas' => $request->fasilitas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.ruangan')->with('success', 'Ruangan berhasil diperbarui.');
    }

    public function deleteRuangan($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

        return back()->with('success', 'Ruangan berhasil dihapus.');
    }

    public function profile()
    {
        return view('pages.admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());

        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->update($request->only('username', 'name', 'email', 'phone'));

        if ($request->hasFile('profile_picture')) {
            $imageName = time().'.'.$request->profile_picture->extension();
            $request->profile_picture->move(public_path('images/profile_pictures'), $imageName);
            $user->profile_picture = 'images/profile_pictures/'.$imageName;
        }

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profil berhasil diperbarui');
    }
}
