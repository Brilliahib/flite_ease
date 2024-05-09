<?php

use App\Http\Controllers\CariRiwayatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Models\Tiket;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RiwayatController;
use Filament\Filament;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tikets = Tiket::with(['bandaraAsal', 'bandaraTujuan'])->get();
    return view('welcome', [
        'tikets' => $tikets
    ]);
});
Route::get('/cari-tiket', [TiketController::class, 'cariTiket']);
Route::resource('/cari-tiket/formulir', PemesananController::class);
Route::get('/riwayat', [RiwayatController::class, 'index']);
Route::get('/cari-tiket/formulir', [PemesananController::class, 'cariDanAmbilTiket']); 
Route::get('/login', [LoginController::class, 'index']);
Route::get('/riwayat/detail', [CariRiwayatController::class, 'cariTiket']);
Route::get('/cari-tiket/formulir/detail', [PaymentController::class, 'show']);


