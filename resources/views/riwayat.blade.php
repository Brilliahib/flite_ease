@extends('layouts.main')

@section('container')
    <div class="hero">
        <div class="container">
            <div class="riwayat d-flex">
                <div class="card border-0 p-4" style="width: 800px !important;">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/people-tiket.png') }}" alt="" width="300px">
                    </div>
                    <form action="/riwayat/detail" method="GET">
                        <div class="mb-3">
                            <label for="kode_booking" class="form-label">Kode Booking</label>
                            <input type="text" class="form-control" name="kode_booking" id="kode_booking">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
