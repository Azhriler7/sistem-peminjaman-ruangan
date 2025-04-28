<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangans = Ruangan::all();
        return view('pages.admin.gedung.index', compact('ruangans'));
    }

    public function create()
    {
        return view('pages.admin.gedung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ruang' => 'required|unique:ruangans,id_ruang',
            'nama_ruang' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        Ruangan::create($request->all());

        return redirect()->route('admin.gedung')->with('success', 'Ruangan berhasil ditambahkan');
    }

    public function edit($id_ruang)
    {
        $ruangan = Ruangan::where('id_ruang', $id_ruang)->firstOrFail();
        return view('pages.admin.gedung.edit', compact('ruangan'));
    }

    public function update(Request $request, $id_ruang)
    {
        $request->validate([
            'nama_ruang' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        $ruangan = Ruangan::where('id_ruang', $id_ruang)->firstOrFail();
        $ruangan->update($request->only('nama_ruang', 'kapasitas', 'deskripsi'));

        return redirect()->route('admin.gedung')->with('success', 'Ruangan berhasil diperbarui');
    }

    public function destroy($id_ruang)
    {
        $ruangan = Ruangan::where('id_ruang', $id_ruang)->firstOrFail();
        $ruangan->delete();

        return back()->with('success', 'Ruangan berhasil dihapus');
    }
}
