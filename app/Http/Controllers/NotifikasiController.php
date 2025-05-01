<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasi = Notifikasi::latest()->get();
        return view('pages.admin.notifikasi', compact('notifikasi'));
    }

    public function markAsRead($id)
    {
        $notif = Notifikasi::findOrFail($id);
        $notif->is_read = true;
        $notif->save();

        return back();
    }
}