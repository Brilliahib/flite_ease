@extends('layouts.main')

@section('container')
    <div class="hero" style="height: 92vh;">
        <div class="container">
            <div class="riwayat d-flex">
                <div class="card border-0 p-4" style="width: 800px !important;">
                    <div>
                        <h3 class="fw-semibold text-center mb-3">Detail Tiket</h3>
                        @if ($results)
                            <h5 class="fw-semibold text-gray text-center text-uppercase kode-booking mb-4">
                                #{{ $results->kode_booking }}</h5>
                            <div class="row mb-4">
                                <h6 class="fw-semibold mb-3" style="color: #007cff;">Bandara</h6>
                                <p class="fw-medium mb-4">{{ $results->tiket->bandaraAsal->nama_bandara }} -
                                    {{ $results->tiket->bandaraTujuan->nama_bandara }}</p>
                                <div class="col-lg-4">
                                    <p class="mb-1">Nama Penumpang</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007cff"
                                            class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg> {{ $results->nama_pemesan }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Kode Booking</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007cff"
                                            class="bi bi-airplane-engines" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0c-.787 0-1.292.592-1.572 1.151A4.35 4.35 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0M7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1s.458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7z" />
                                        </svg> {{ $results->tiket->pesawat->tipe_pesawat }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Tanggal Keberangkatan</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007cff"
                                            class="bi bi-clock-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        </svg> <?php echo date('l, d F Y', strtotime($results->tanggal_keberangkatan)); ?></p>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row">
                                <h6 class="fw-semibold mb-3" style="color: #007cff;">Detail</h6>
                                <div class="col-lg-4">
                                    <p class="mb-1">Nama Pemesan</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007cff"
                                            class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg> {{ $results->nama_pemesan }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Kode Booking</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007cff"
                                            class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                                            <path
                                                d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z" />
                                            <path
                                                d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z" />
                                        </svg> {{ $results->kode_booking }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Jumlah Tiket</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-ticket" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z" />
                                        </svg> {{ $results->jumlah_tiket }}</p>
                                </div>
                            </div>
                        @else
                            <p>Data tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
