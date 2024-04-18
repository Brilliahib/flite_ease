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
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'bandara_asal' => 'required',
            'bandara_tujuan' => 'required',
            'tanggal_keberangkatan'=>'nullable'
        ]);

        $validatedData['kode_booking'] = Str::random(8);

        Pemesanan::create($validatedData);

        return redirect('/cari-tiket/formulir/detail');
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

    public function cariTiket(Request $request){
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
        return view('pemesanan', compact('results'));
    }
}
