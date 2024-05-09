<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemesanan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_pemesan' => 'required',
        'tiket_id' => 'required',
        'jumlah_tiket' => 'required',
        'harga_tiket' => 'required',
        'tanggal_keberangkatan' => 'nullable',
    ]);

    $validatedData['kode_booking'] = Str::random(8);

    Pemesanan::create($validatedData);

    // Dapatkan data pemesanan yang baru saja dibuat
    $pemesanan = Pemesanan::latest()->first();

    // Tampilkan halaman pembayaran dengan menggunakan metode show() dari PaymentController
    return app()->make(PaymentController::class)->show($pemesanan);
}


    /**
     * Display the specified resource.
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }

    public function cariDanAmbilTiket(Request $request)
    {
        $validatedData = $request->validate([
            'bandara_asal' => 'required|string',
            'bandara_tujuan' => 'required|string',
            'tanggal_keberangkatan' => 'required|date',
            // 'tiket_id' => 'required',
            'harga_tiket' => 'required',
        ]);

        // Lakukan pencarian berdasarkan input yang diberikan
        $results = Tiket::where('bandaraasal_id', $validatedData['bandara_asal'])
            ->where('bandaratujuan_id', $validatedData['bandara_tujuan'])
            ->where('harga_tiket', $validatedData['harga_tiket'])
            // ->where('tiket_id', $validatedData['tiket_id'])
            ->whereDate('tanggal_keberangkatan', $validatedData['tanggal_keberangkatan'])
            ->get();

        $hargaTiket = null;

        if ($request->has('tiket_id')) {
            // Jika ada tiket_id yang dikirimkan, ambil harga tiket
            $tiketId = $request->input('tiket_id');

            // Temukan tiket dengan tiket_id yang sesuai
            $selectedTicket = Tiket::find($tiketId);

            // Pastikan tiket ditemukan sebelum menarik harga_tiket
            $hargaTiket = $selectedTicket ? $selectedTicket->harga_tiket : null;
        }

        // Kirim hasil pencarian dan harga tiket ke halaman pemesanan
        return view('pemesanan', compact('results', 'hargaTiket'));
    }
}
