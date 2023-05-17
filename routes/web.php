<?php

use App\Http\Controllers\InboundController;
use App\Http\Controllers\OutboundController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentInboundController;
use App\Http\Controllers\StudentOutboundController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;

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

Route::get('/login', [UserController::class, 'login'])->middleware('guest');

Route::post('/login', [UserController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/dashboard/adminProfil{extension}', function () {
    return view('profil');
})->where('extension', '(?:.html)?');

// Route::resource('mahasiswa', PostController::class)->middleware('auth', 'admin');

// Route::resource('inbound', StudentInboundController::class)->middleware('auth', 'admin');

// Route::resource('outbound', StudentOutboundController::class)->middleware('auth', 'admin');

// Route::resource('dashboard', DashboardController::class)->middleware('auth', 'admin');

// Route::resource('dosen-inbound', InboundController::class)->middleware('auth', 'admin');
// Route::resource('dosen-outbound', OutboundController::class)->middleware('auth', 'admin');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('/dashboard/mahasiswa', PostController::class);
    Route::resource('/dashboard/inbound', StudentInboundController::class);
    Route::resource('/dashboard/outbound', StudentOutboundController::class);
    Route::resource('/dashboard/dosen-inbound', InboundController::class);
    Route::resource('/dashboard/dosen-outbound', OutboundController::class);
});

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::get('logout', [UserController::class, 'logout']);

Route::resource('/dashboard/form', UserFormController::class)->except('show')->middleware('non-admin');
