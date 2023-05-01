<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentInboundController;
use App\Http\Controllers\StudentOutboundController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\DashboardController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profil{extension}', function () {
    return view('profil');
})->where('extension', '(?:.html)?');

Route::resource('mahasiswa', PostController::class);

Route::resource('inbound', StudentInboundController::class);

Route::resource('outbound', StudentOutboundController::class);

Route::resource('dashboard', DashboardController::class);