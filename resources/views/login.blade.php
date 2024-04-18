@extends('layouts.main')

@section('container')
    <div class="hero">
        <div class="container">
            <div class="riwayat d-flex">
                <div class="card border-0 p-4" style="width: 800px !important;">
                    <div class="justify-content-center">
                        <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/people-plane.png') }}" alt="" width="350px">
                        </div>
                        <h3 class="fw-bold text-center">Login</h1>
                    </div>
                    <form action="/riwayat/detail" method="GET">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
