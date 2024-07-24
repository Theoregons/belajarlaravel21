<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('users/{id}', function ($id) {});
Route::post('users/{id}', function ($id) {});
Route::put('users/{id}', function ($id) {});
Route::delete('users/{id}', function ($id) {});


Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'Nilai saya : '. $nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari penjulahan adalah '. $nilai1 + $nilai2;
});

Route::get('perkalian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari perkalian adalah '. $nilai1 * $nilai2;
});

Route::get('pembagian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari pembagian adalah '. $nilai1 / $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari pengurangan adalah '. $nilai1 - $nilai2;
});

Route::get('data', function (Request $request) {
    return $request;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'pintu', 'lampu', 'pensil', 'bolpoin', 'buku'];
    // return view('table', ['data' => $data]);
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('uploadsiswa', [SiswaController::class, 'store']);
// Route::get('tampilsiswa', [SiswaController::class, 'show']);

Route::resource('siswa', SiswaController::class);
