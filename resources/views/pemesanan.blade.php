@extends('layouts.main')

@section('container')
    <div class="hero" style="min-height: 90vh;">
        <div class="container">
            <div class="main-pemesanan">
                <div class="row pesanan-section">
                    <div class="col-lg-8">
                        <div class="card card-pemesanan border-0 p-4">
                            <form method="post" action="/cari-tiket/formulir" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 text-center">
                                    <h5 class="fw-bold">Detail Pemesanan</h5>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                                </div>
                                @foreach ($results as $result)
                                <input type="hidden" name="bandara_asal" value="{{ $result->bandara_asal }}">
                                <input type="hidden" name="bandara_tujuan" value="{{ $result->bandara_tujuan }}">
                                <input type="hidden" name="tanggal_keberangkatan"
                                    value="{{ $result->tanggal_keberangkatan }}">
                                    @endforeach

                                <button type="submit" class="btn" style="width: 100%;">Konfirmasi Pemesanan</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @if (isset($results) && !$results->isEmpty())
                            @foreach ($results as $result)
                                <div class="card card-pemesanan border-0 p-4">
                                    <div class="card-header d-flex gap-4 bg-white justify-content-center">
                                        <p>{{ $result->bandara_asal }}</p>
                                        <p>></p>
                                        <p>{{ $result->bandara_tujuan }}</p>
                                    </div>
                                    <div class="card-body p-0 mt-4">
                                        <p><?php echo date('j F Y', strtotime($result->tanggal_keberangkatan)); ?></p>
                                    </div>
                                </div>
                            @break
                        @endforeach
                    @else
                        <p>Tidak ada hasil pencarian.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
