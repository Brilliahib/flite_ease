@extends('layouts.main')

@section('container')
    <div class="hero" style="min-height: 92vh;">
        <div class="container">
            <div class="search-tiket-section">
                @foreach ($results as $result)
                    <div class="card-body col-lg-12 mb-4 d-flex justify-content-center mb-0">
                        <div class="card-tiket border-0 d-flex row p-2 rounded-4 border">
                            <div class="h-full d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-4 mt-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>

                                    </div>
                                    <div class="">
                                        <p class="fw-semibold">{{ $result->bandaraAsal->nama_bandara }}</p>
                                    </div>
                                    <div class="">
                                        <p class="fw-semibold">{{ $result->bandaraTujuan->nama_bandara }}</p>
                                    </div>
                                    <div class="">
                                        <p class="fw-semibold"><?php echo date('l, j F Y', strtotime($result->tanggal_keberangkatan)); ?></p>
                                    </div>
                                </div>
                                <div>
                                    <a href="" class="rounded-3 text-decoration-none fw-semibold text-base"
                                        style="background-color: #e7f2ff; color:#007bff; padding:8px 36px">Cari</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @break
            @endforeach
            @if ($results->isEmpty())
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/not_found.png') }}" alt="" class="mb-4" width="450px">
                        </div>
                        <h5 class="text-big text-center fw-bold">Penerbangan yang kamu cari nggak ada, nih</h5>
                        <p class="text-center">Ayo coba ganti tanggal atau destinasi lainnya untuk menemukan perjalanan
                            seru.</p>
                    </div>
                </div>
            @else
                <div class="row">
                    @foreach ($results as $result)
                        <div class="col-lg-12 mb-4">
                            <div class="card-tiket border p-4 rounded-4" style="cursor: pointer;">
                                <div
                                    onclick="redirectToForm('{{ $result->bandaraAsal->id }}', '{{ $result->bandaraTujuan->id }}', '{{ $result->tanggal_keberangkatan }}', '{{ $result->id }}', '{{ $result->harga_tiket }}')">
                                    <div class="card-body" style="text-decoration: none;">
                                        <div class="row">
                                            <div class="col-lg-4 gap-3 h-full d-flex align-items-center mb-3">
                                                <div class="logo-pesawat rounded-circle p-2 border"
                                                    style="background-color: #fff; width:50px; height: 50px">
                                                    <img src="{{ asset('storage/' . $result->pesawat->image) }}"
                                                        alt="" style="width: 100%; height: auto;">
                                                </div>
                                                <div class="nama-pesawat">
                                                    <h6 class="fw-semibold mb-0">{{ $result->pesawat->tipe_pesawat }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-center gap-4 justify-center">
                                                <div>
                                                    <h5 class="fw-bold">
                                                        {{ date('H:i', strtotime($result->jam_berangkat)) }} -
                                                        {{ date('H:i', strtotime($result->jam_tiba)) }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <h5 class="fw-semibold" style="color: #f15d5e;">Rp
                                                    {{ number_format($result->harga_tiket, 0, ',', '.') }} <span
                                                        class="text-gray fw-normal text-base">/pax</span> </h5>
                                            </div>

                                        </div>
                                        <div class="rounded-4"
                                            style="padding: 4px 12px; background-color:#e2fbed; color:#0bae54; display:inline-block">
                                            <p class="mb-0 text-small">Masih tersisa
                                                {{ $result->pesawat->kapasitas_kursi }} Kursi</p>
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

<script>
    function redirectToForm(bandaraAsal, bandaraTujuan, tanggalKeberangkatan, tiketId, hargaTiket) {
        var url = "/cari-tiket/formulir?bandara_asal=" + bandaraAsal + "&bandara_tujuan=" + bandaraTujuan +
            "&tanggal_keberangkatan=" + tanggalKeberangkatan + "&tiket_id=" + tiketId + "&harga_tiket=" + hargaTiket;

        window.location.href = url;
    }
</script>
@endsection
