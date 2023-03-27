<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/mahasiswa{extension}', function () {
    return view('mahasiswa');
})->where('extension', '(?:.html)?');

Route::get('/dataMahasiswa{extension}', function () {
    return view('tambah_data');
})->where('extension', '(?:.html)?');

Route::get('/editdataMahasiswa{extension}', function () {
    return view('edit_data');
})->where('extension', '(?:.html)?');

Route::get('/artikel{extension}', function () {
    return view('artikel');
})->where('extension', '(?:.html)?');

Route::get('/editArtikel{extension}', function () {
    return view('edit_artikel');
})->where('extension', '(?:.html)?');

Route::get('/profilAdmin{extension}', function () {
    return view('profil');
})->where('extension', '(?:.html)?');

Route::get('/dashboard', function () {
    return view('dashboard');
});
