<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Pesawat;

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
        $results = Tiket::where('bandaraasal_id', $validatedData['bandara_asal'])
                        ->where('bandaratujuan_id', $validatedData['bandara_tujuan'])
                        ->whereDate('tanggal_keberangkatan', $validatedData['tanggal_keberangkatan'])
                        ->with('pesawat') // Load relasi pesawat
                        ->get();

        // Kirim hasil pencarian ke halaman hasil
        return view('tiket', compact('results'));
    }
}
