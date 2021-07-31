<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('/login');
});

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/profile', App\Http\Controllers\ProfileController::class, ['only' => ['index', 'update']]);

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/kuesioner', [App\Http\Controllers\Admin\KuesionerController::class, 'index'])->name('adminKuesioner');
    Route::resource('akun', App\Http\Controllers\Admin\AkunController::class);
});

Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::resource('dosenTetap', App\Http\Controllers\Staff\DosenTetapController::class);
    Route::resource('dosenTidakTetap', App\Http\Controllers\Staff\DosenTidakTetapController::class);
    Route::resource('dosenPembimbingTA', App\Http\Controllers\Staff\DosenPembimbingUtamaTugasAkhirController::class);
});

Route::middleware(['auth', 'role:1,3'])->group(function () {
    Route::resource('EWMP-DTPT', App\Http\Controllers\Dosen\EWMPDTPTController::class);
    Route::resource('Pengakuan-DTPS', App\Http\Controllers\Dosen\PengakuanDTPSController::class);
    Route::resource('Penelitian-DTPS', App\Http\Controllers\Dosen\PenelitianDTPSController::class);
    Route::resource('PKM-DTPS', App\Http\Controllers\Dosen\PKMDTPSController::class);
    Route::resource('Publikasi-IlmiahDTPS', App\Http\Controllers\Dosen\PublikasiIlmiahDTPSController::class);
    Route::resource('Karya-IlmiahDTPS', App\Http\Controllers\Dosen\KaryaIlmiahDTPSController::class);
    Route::resource('Jasa-DTPS', App\Http\Controllers\Dosen\JasaDTPSController::class);
    Route::resource('HKI-HakPaten', App\Http\Controllers\Dosen\HKIHakPatenController::class);
    Route::resource('HKI-HakCipta', App\Http\Controllers\Dosen\HKIHakCiptaController::class);
    Route::resource('HKI-TeknologiTepatGuna', App\Http\Controllers\Dosen\HKITeknologiTepatGunaController::class);
    Route::resource('HKI-BukuBerISBN', App\Http\Controllers\Dosen\HKIBukuBerISBNController::class);
});