<?php
use App\Http\Controllers\InboundController;
use App\Http\Controllers\OutboundController;
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

Route::controller(PostController::class)->group(function(){
    Route::get('importExport', 'importExport');
    Route::post('import', 'import')->name('import');
    Route::get('export', 'export')->name('export');
});

Route::controller(StudentInboundController::class)->group(function(){
    Route::get('import_exportStudentInbound', 'importExportStudentInbound');
    Route::post('importStudentInbound', 'importStudentInbound')->name('importStudentInbound');
    Route::get('exportStudentInbound', 'exportStudentInbound')->name('exportStudentInbound');
});

Route::controller(StudentoutboundController::class)->group(function(){
    Route::get('import_exportStudentOutbound', 'importExportStudentOutbound');
    Route::post('importStudentOutbound', 'importStudentOutbound')->name('importStudentOutbound');
    Route::get('exportStudentOutbound', 'exportStudentOutbound')->name('exportStudentOutbound');
});

Route::controller(InboundController::class)->group(function(){
    Route::get('import_exportInbound', 'importExportInbound');
    Route::post('importInbound', 'importInbound')->name('importInbound');
    Route::get('exportInbound', 'exportInbound')->name('exportInbound');
});

Route::controller(OutboundController::class)->group(function(){
    Route::get('import_exportOutbound', 'importExportOutbound');
    Route::post('importOutbound', 'importOutbound')->name('importOutbound');
    Route::get('exportOutbound', 'exportOutbound')->name('exportOutbound');
});


Route::resource('mahasiswa', PostController::class);

Route::resource('inbound', StudentInboundController::class);

Route::resource('outbound', StudentOutboundController::class);

Route::resource('dashboard', DashboardController::class);

Route::resource('dosen-inbound', InboundController::class);
Route::resource('dosen-outbound', OutboundController::class);