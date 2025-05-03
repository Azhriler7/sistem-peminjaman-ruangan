<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use App\Models\RequestPassword;
use App\Models\User;

class NotifikasiController extends Controller
{
    public function index()
{
    $notifikasi = Notifikasi::orderBy('created_at', 'desc')->get();

    return view('pages.admin.notifikasi', compact('notifikasi'));
}

public function updateStatus(Request $request, $id)
{
    $requestPassword = RequestPassword::findOrFail($id);

    if ($request->status == 'diterima') {
        $user = User::where('username', $requestPassword->username)
                    ->where('email', $requestPassword->email)
                    ->first();

        if ($user) {
            $user->password = $requestPassword->new_password; // Sudah di-hash sebelumnya
            $user->save();
        }
    }

    $requestPassword->status = $request->status;
    $requestPassword->save();

    return redirect()->back()->with('success', 'Status permintaan diperbarui.');
}
}

