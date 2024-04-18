@extends('layouts.main')

@section('container')
    <div class="hero" style="min-height: 90vh;">
        <div class="container">
            <div class="search-tiket-section">
                @foreach ($results as $result)
                    <div class="card-body col-lg-12 mb-4 d-flex justify-content-center">
                        <div class="card-tiket border-0 d-flex row p-2 rounded-4">
                            <div class="col-lg-4 text-center">
                                <p class="fw-bold">Bandara Asal</p>
                                <p>{{ $result->bandara_asal }}</p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <p class="fw-bold">Bandara Tujuan</p>
                                <p>{{ $result->bandara_tujuan }}</p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <p class="fw-bold">Tanggal Keberangkatan</p>
                                <p><?php echo date('l, j F Y', strtotime($result->tanggal_keberangkatan)); ?></p>
                            </div>
                        </div>
                    </div>
                @break
            @endforeach
            @if ($results->isEmpty())
                <p class="text-center">Tidak ada hasil yang ditemukan.</p>
            @else
                <div class="row">
                    @foreach ($results as $result)
                        <div class="col-lg-12" style="margin-bottom: 48px;">
                            <div class="card-tiket border-0 p-4 rounded-4">
                                <div class="card-body" style="text-decoration: none;">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <p>{{ $result->nama }}</p>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <p>{{ $result->bandara_asal }}</p>
                                            <p>|</p>
                                            <p>{{ $result->bandara_tujuan }}</p>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                        <p><?php echo date('l, j F Y', strtotime($result->tanggal_keberangkatan)); ?></p>
                                        </div>
                                        <div class="col-lg-3 text-center">
                                            <form action="/cari-tiket/formulir" method="get">
                                                <input type="hidden" name="bandara_asal"
                                                    value="{{ $result->bandara_asal }}">
                                                <input type="hidden" name="bandara_tujuan"
                                                    value="{{ $result->bandara_tujuan }}">
                                                <input type="hidden" name="tanggal_keberangkatan"
                                                    value="{{ $result->tanggal_keberangkatan }}">
                                                <button type="submit" class="btn px-4">Pilih Jadwal</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
