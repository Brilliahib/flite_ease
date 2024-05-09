<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(Pemesanan $pemesanan){
        $pemesanan->load('tiket');
        return view('payment', [
            "title" => "halo",
            "pemesanan" => $pemesanan
        ]);
    }
}
