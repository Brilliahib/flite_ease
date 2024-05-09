@extends('layouts.main')

@section('container')
    <div class="hero" style="height: 95vh;">
        <div class="container">
            <div class="riwayat d-flex align-items-center">
                <div class="card border p-4" style="width: 800px !important;">
                    <div>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/payment.png') }}" alt="" width="450px">
                        </div>
                        <div class="text-center">
                            <h5 class="text-big fw-semibold mb-4">Pemesanan Anda Berhasil!</h5>
                            <p>Nama Pemesan: {{ $pemesanan->nama_pemesan }}</p>
                            <p>Nama Pemesan: {{ $pemesanan->tiket->nama }}</p>
                            <p>Kode Booking: {{ $pemesanan->kode_booking }}</p>
                            <p>Harga Tiket: {{ $pemesanan->harga_tiket }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
