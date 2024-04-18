@extends('layouts.main')

@section('container')
    <div class="hero">
        <div class="container">
            <div class="riwayat d-flex">
                <div class="card border-0 p-4" style="width: 800px !important;">
                    <div>
                        <h3 class="fw-semibold text-center mb-3">Detail Tiket</h3>
                        @if ($results)
                            <h5 class="fw-semibold text-gray text-center text-uppercase kode-booking mb-4">
                                #{{ $results->kode_booking }}</h5>
                            <div class="row mb-4">
                                <h6 class="fw-semibold mb-3" style="color: #007cff;">Pesawat</h6>
                                <p class="text-uppercase fw-medium">{{ $results->bandara_asal }} -
                                    {{ $results->bandara_tujuan }}</p>
                                <div class="col-lg-4">
                                    <p class="mb-1">Nama Penumpang</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg> {{ $results->nama }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Kode Booking</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                                            <path
                                                d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z" />
                                            <path
                                                d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z" />
                                        </svg> {{ $results->kode_booking }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Tanggal Keberangkatan</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        </svg> <?php echo date('l, d F Y', strtotime($results->tanggal_keberangkatan)); ?></p>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row">
                                <h6 class="fw-semibold mb-3" style="color: #007cff;">Detail Penumpang</h6>
                                <div class="col-lg-4">
                                    <p class="mb-1">Nama Pemesan</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg> {{ $results->nama }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Email</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                        </svg> {{ $results->email }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-1">Telp</p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#007cff" class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                        </svg> {{ $results->nomor_telepon }}</p>
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
