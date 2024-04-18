<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket; // Pastikan Anda mengganti App\Models\Tiket dengan namespace yang sesuai dengan model tiket Anda

class TiketController extends Controller
{
    public function cariTiket(Request $request)
    {
        // Validasi input dari form pencarian
        $validatedData = $request->validate([
            'bandara_asal' => 'required|string',
            'bandara_tujuan' => 'required|string',
            'tanggal_keberangkatan' => 'required|date',
        ]);

        // Lakukan pencarian berdasarkan input yang diberikan
        $results = Tiket::where('bandara_asal', $validatedData['bandara_asal'])
                        ->where('bandara_tujuan', $validatedData['bandara_tujuan'])
                        ->whereDate('tanggal_keberangkatan', $validatedData['tanggal_keberangkatan'])
                        ->get();

        // Kirim hasil pencarian ke halaman hasil
        return view('tiket', compact('results'));
    }
}
