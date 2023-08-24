<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data_toko', [DatabaseController::class, 'data_toko'])->name('data toko');
Route::get('/data_pegawai', [DatabaseController::class, 'data_pegawai'])->name('data pegawai');
Route::get('/data_supplier', [DatabaseController::class, 'data_supplier'])->name('data supplier');
Route::get('/data_barang', [DatabaseController::class, 'data_barang'])->name('data barang');
Route::get('/data_member', [DatabaseController::class, 'data_member'])->name('data member');

Route::get('/trx_umum', [TransaksiController::class, 'trx_umum'])->name('trx umum');
Route::get('/trx_grosir', [TransaksiController::class, 'trx_grosir'])->name('trx grosir');
Route::get('/trx_servis', [TransaksiController::class, 'trx_servis'])->name('trx servis');
Route::get('/trx_logs', [TransaksiController::class, 'trx_logs'])->name('trx logs');

Route::get('/laporan_harian', [LaporanController::class, 'laporan_harian'])->name('laporan harian');
Route::get('/laporan_bulanan', [LaporanController::class, 'laporan_bulanan'])->name('laporan bulanan');
Route::get('/laporan_tahunan', [LaporanController::class, 'laporan_tahunan'])->name('laporan tahunan');
