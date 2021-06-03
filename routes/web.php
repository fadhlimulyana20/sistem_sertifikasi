<?php

use App\Http\Controllers\AsesiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PenawaranSertifikasiController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\PendaftarInstrumenController;
use App\Http\Controllers\RefJenisSertifikasiController;
use App\Http\Controllers\RefKegiatanController;
use App\Http\Controllers\RefKuesionerController;
use App\Http\Controllers\SyaratSertifikasiController;
use App\Http\Controllers\RefUnitKompetensiController;
use App\Http\Controllers\InstrumenAsesmenKompetensiController;

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('pendaftar')->name('pendaftar.')->group(function () {
    Route::get('/', [PendaftarController::class, 'index'])->name('index');
    Route::get('/create', [PendaftarController::class, 'create'])->name('create');

    Route::prefix('instrumen')->name('instrumen.')->group(function () {
        Route::get('/{id_pendaftar}', [PendaftarInstrumenController::class, 'index'])->name('index');
    });
});

Route::prefix('jadwal')->name('jadwal.')->middleware('auth')->group(function () {
    Route::get('/', [JadwalController::class, 'index'])->name('index');
    Route::get('/create', [JadwalController::class, 'create'])->name('create');
    Route::post('/store', [JadwalController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [JadwalController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [JadwalController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [JadwalController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [JadwalController::class, 'show'])->name('show');
});

Route::prefix('asesor')->name('asesor.')->middleware('auth')->group(function () {
    Route::get('/', [AsesorController::class, 'index'])->name('index');
    Route::get('/create', [AsesorController::class, 'create'])->name('create');
    Route::post('/store', [AsesorController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AsesorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AsesorController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [AsesorController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [AsesorController::class, 'show'])->name('show');
});

Route::prefix('asesi')->name('asesi.')->group(function () {
    Route::get('/', [AsesiController::class, 'index'])->name('index');
    Route::get('/create', [AsesiController::class, 'create'])->name('create');
    Route::post('/store', [AsesiController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AsesiController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AsesiController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [AsesiController::class, 'destroy'])->name('destroy');
});

Route::prefix('penawaran_sertifikasi')->name('penawaran_sertifikasi.')->group(function () {
    Route::get('/', [PenawaranSertifikasiController::class, 'index'])->name('index');
    Route::get('/create', [PenawaranSertifikasiController::class, 'create'])->name('create');
    Route::post('/store', [PenawaranSertifikasiController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [PenawaranSertifikasiController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PenawaranSertifikasiController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PenawaranSertifikasiController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [PenawaranSertifikasiController::class, 'show'])->name('show');
});

Route::prefix('ref_kegiatan')->name('ref_kegiatan.')->group(function () {
    Route::get('/', [RefKegiatanController::class, 'index'])->name('index');
    Route::get('/create', [RefKegiatanController::class, 'create'])->name('create');
    Route::post('/store', [RefKegiatanController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [RefKegiatanController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RefKegiatanController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [RefKegiatanController::class, 'index'])->name('destroy');
    Route::get('/detail/{id}', [RefKegiatanController::class, 'detail'])->name('show');
});

Route::prefix('ref_kuesioner')->name('ref_kuesioner.')->group(function () {
    Route::get('/', [RefKuesionerController::class, 'index'])->name('index');
    Route::get('/create', [RefKuesionerController::class, 'create'])->name('create');
    Route::post('/store', [RefKuesionerController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [RefKuesionerController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RefKuesionerController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [RefKuesionerController::class, 'index'])->name('destroy');
    Route::get('/detail/{id}', [RefKuesionerController::class, 'detail'])->name('show');
});

Route::prefix('syarat_sertifikasi')->name('syarat_sertifikasi.')->middleware('auth')->group(function () {
    Route::get('/', [SyaratSertifikasiController::class, 'index'])->name('index');
    Route::get('/create', [SyaratSertifikasiController::class, 'create'])->name('create');
    Route::post('/store', [SyaratSertifikasiController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SyaratSertifikasiController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SyaratSertifikasiController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [SyaratSertifikasiController::class, 'destroy'])->name('destroy');
});

Route::prefix('ref_unit_kompetensi')->name('ref_unit_kompetensi.')->middleware('auth')->group(function () {
    Route::get('/', [RefUnitKompetensiController::class, 'index'])->name('index');
    Route::get('/create', [RefUnitKompetensiController::class, 'create'])->name('create');
    Route::post('/store', [RefUnitKompetensiController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [RefUnitKompetensiController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RefUnitKompetensiController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [RefUnitKompetensiController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [RefUnitKompetensiController::class, 'detail'])->name('show');

    Route::prefix('instrumen')->name('instrumen.')->group(function () {
        Route::get('/{id_ref_unit_kompetensi}', [InstrumenAsesmenKompetensiController::class, 'index'])->name('index');
    });
});

Route::prefix('ref_jenis_sertifikasi')->name('ref_jenis_sertifikasi.')->middleware('auth')->group(function () {
    Route::get('/', [RefJenisSertifikasiController::class, 'index'])->name('index');
    Route::get('/create', [RefJenisSertifikasiController::class, 'create'])->name('create');
    Route::post('/store', [RefJenisSertifikasiController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [RefJenisSertifikasiController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RefJenisSertifikasiController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [RefJenisSertifikasiController::class, 'destroy'])->name('destroy');
});
