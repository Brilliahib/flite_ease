@extends('layouts.main')
@section('container')
    <div class="home">
        <div class="container">
            <div class="hero-section d-flex row">
            <div class="col-lg-6">
                    <div class="card border-0 p-4">
                        <form action="/cari-tiket" method="GET">
                            <div class="cari-tiket">
                                <div class="card-form my-3">
                                    <p class="fs-11 text-muted mb-2">Bandara Asal</p>
                                    <select name="bandara_asal" class="border-0 main-form" style="cursor: pointer;">
                                        @foreach ($tikets as $tiket)
                                            <option value="{{ $tiket->bandara_asal }}">{{ $tiket->bandara_asal }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-form my-3">
                                    <p class="fs-11 text-muted mb-2">Bandara Tujuan</p>
                                    <select name="bandara_tujuan" class="border-0 main-form" style="cursor: pointer;">
                                        @foreach ($tikets as $tiket)
                                            <option value="{{ $tiket->bandara_tujuan }}">{{ $tiket->bandara_tujuan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-form my-3">
                                    <p class="fs-11 text-muted mb-2">Tanggal Keberangkatan</p>
                                    <input class="main-form border-0" type="date" name="tanggal_keberangkatan" 
                                        class="form-control datepicker border-0"
                                        value="{{ old('tanggal_keberangkatan', '30-03-2024') }}">
                                </div>
                                <button type="submit" class="btn" style="width: 100%; margin-top:12px">Cari Tiket</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
