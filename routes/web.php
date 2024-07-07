<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\InteraksiController;
use App\Http\Controllers\TransaksiController;
use App\Models\InteraksiModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// router untuk memanggil halaman dashboard
Route::get('Home', [PelangganController::class, 'Home'])->name('Home');
// router untuk halaman memanggil halaman simpan
Route::get('HalamanSimpanPelanggan', [PelangganController::class, 'HalamanSimpanPelanggan'])->name('HalamanSimpanPelanggan');
// router untuk menyimpan data ke tb_pelanggan
Route::post('savePelanggan', [PelangganController::class, 'savePelanggan'])->name('savePelanggan');
// router untuk menampilkan data pada halaman view_pelanggan
Route::get('tampilkanPelanggan', [PelangganController::class, 'tampilkanPelanggan'])->name('tampilkanPelanggan');
// router memanggil halaman edit
Route::get('editPelanggan{id}', [PelangganController::class, 'editPelanggan'])->name('editPelanggan');
// router untuk menyimpan hasil editan
Route::post('editPelangganSimpan{id}', [PelangganController::class, 'editPelangganSimpan'])->name('editPelangganSimpan');
// untuk menghapus data pelanggan
Route::get('hapusPelanggan{id}', [PelangganController::class, 'hapusPelanggan'])->name('hapusPelanggan');
// halaman input interaksi
Route::get('halamanInputInteraksi', [InteraksiController::class, 'halamanInputInteraksi'])->name('halamanInputInteraksi');
// simpan interaksi
Route::post('saveInteraksi', [InteraksiController::class, 'saveInteraksi'])->name('saveInteraksi');
// data interaksi
Route::get('interaksiData', [InteraksiController::class, 'interaksiData'])->name('interaksiData');
// halaman input transaksi
Route::get('halamanInputTransaksi', [TransaksiController::class, 'halamanInputTransaksi'])->name('halamanInputTransaksi');
// save transaksi
Route::post('saveTransaksi', [TransaksiController::class, 'saveTransaksi'])->name('saveTransaksi');
// data transaksi
Route::get('view', [TransaksiController::class, 'view'])->name('view');
// edit halaman interaksi
Route::get('interakiEditHalaman/{id}', [InteraksiController::class, 'interakiEditHalaman'])->name('interakiEditHalaman');
// untuk menyimpan hasil editan interaksi
Route::post('saveEditInteraksi{id}', [InteraksiController::class, 'saveEditInteraksi'])->name('saveEditInteraksi');
// untuk menghapus interaksi
Route::get('hapusInteraksi{id}', [InteraksiController::class, 'hapusInteraksi'])->name('hapusInteraksi');
// untuk menghapus transaksi
Route::get('hapusTransaksi{id}', [TransaksiController::class, 'hapusTransaksi'])->name('hapusTransaksi');




