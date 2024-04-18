<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class CariRiwayatController extends Controller
{
    public function cariTiket(Request $request)
    {
        // Validasi input dari form pencarian
        $validatedData = $request->validate([
            'kode_booking' => 'required|string',
        ]);

        // Lakukan pencarian berdasarkan input yang diberikan
        $results = Pemesanan::where('kode_booking', $validatedData['kode_booking'])->first(); // Menggunakan first() untuk mengambil satu baris data saja

        // Kirim hasil pencarian ke halaman hasil
        return view('pemesanantiket', compact('results'));
    }
}
