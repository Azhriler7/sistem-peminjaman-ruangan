<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Storage;

class RuanganController extends Controller
{
    // Tampilkan semua ruangan
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('pages.admin.ruangan', compact('ruangan'));
    }

    // Tampilkan form tambah ruangan
    public function create()
    {
        return view('pages.admin.tambah-ruangan');
    }

    // Simpan ruangan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'fasilitas' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('ruangan', 'public');
        }
    
        Ruangan::create($data);
    
        return redirect()->route('admin.dashboard')->with('success', 'Ruangan berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('pages.admin.edit-ruangan', compact('ruangan'));
    }

    // Update ruangan
    public function update(Request $request, $id)
{
    $request->validate([
        'nama_ruangan' => 'required|string|max:255',
        'gedung' => 'required|string|max:255',
        'kapasitas' => 'required|integer',
        'fasilitas' => 'nullable|string',
        'deskripsi' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $ruangan = Ruangan::findOrFail($id);
    $data = $request->only(['nama_ruangan', 'gedung', 'kapasitas', 'fasilitas', 'deskripsi']);

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($ruangan->gambar && Storage::exists('public/' . $ruangan->gambar)) {
            Storage::delete('public/' . $ruangan->gambar);
        }

        // Simpan gambar baru
        $path = $request->file('gambar')->store('gambar_ruangan', 'public');
        $data['gambar'] = $path;
    }

    $ruangan->update($data);

    return redirect()->route('admin.dashboard')->with('success', 'Ruangan berhasil diperbarui.');
}

    // Hapus ruangan
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Ruangan berhasil dihapus.');
    }
}
