<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InboundController;
use App\Http\Controllers\OutboundController;
use App\Http\Controllers\ExchangeController;

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
    return view('login');
});

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
})->name('mahasiswa');


Route::get('/dataMahasiswa', function () {
    return view('tambah_data');
})->name('tambah_data');

Route::get('/dataInbound', function () {
    return view('tambah_inbound');
})->name('tambah_inbound');

Route::get('/dataOutbound', function () {
    return view('tambah_outbound');
})->name('tambah_outbound');

// Route::get('/editdataMahasiswa', function () {
//     return view('edit_data');
// })->name('edit_data');


Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/tambah_artikel', function () {
    return view('tambah_artikel');
})->name('tambah_artikel');

Route::get('/profil{extension}', function () {
    return view('profil');
})->where('extension', '(?:.html)?');

Route::resource('mahasiswa', PostController::class);

Route::resource('inbound', InboundController::class);

Route::resource('outbound', OutboundController::class);
