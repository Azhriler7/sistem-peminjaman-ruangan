<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;

class HistoryController extends Controller
{
    // Untuk user melihat riwayat
    public function userHistory()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())->latest()->get();
        return view('pages.user.history', compact('peminjaman'));
    }

    // Untuk admin melihat semua riwayat
    public function adminHistory()
    {
        $peminjaman = Peminjaman::latest()->get();
        return view('pages.admin.history', compact('peminjaman'));
    }

    // Export CSV untuk admin
    public function exportCsv()
    {
        $peminjaman = Peminjaman::all();
        $filename = 'riwayat_peminjaman.csv';

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $callback = function() use ($peminjaman) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['ID', 'Nama Peminjam', 'Nama Ruangan', 'Tanggal', 'Waktu Mulai', 'Waktu Selesai', 'Status']);

            foreach ($peminjaman as $p) {
                fputcsv($handle, [
                    $p->id,
                    $p->nama_peminjam,
                    $p->nama_ruangan,
                    $p->tanggal_peminjaman,
                    $p->waktu_mulai,
                    $p->waktu_selesai,
                    $p->status
                ]);
            }

            fclose($handle);
        };

        return Response::stream($callback, 200, $headers);
    }

    // Export PDF untuk admin
    public function exportPdf()
    {
        $peminjaman = Peminjaman::all();
        $pdf = Pdf::loadView('exports.history_pdf', compact('peminjaman'));
        return $pdf->download('riwayat_peminjaman.pdf');
    }
}
