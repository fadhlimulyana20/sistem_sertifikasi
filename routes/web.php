<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AsesorController;
use App\Models\Jadwal;
use App\Models\Pendaftar;
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
});

Route::prefix('jadwal')->name('jadwal.')->group(function () {
    Route::get('/', [JadwalController::class, 'index'])->name('index');
    Route::get('/create', [JadwalController::class, 'create'])->name('create');
    Route::post('/store', [JadwalController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [JadwalController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [JadwalController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [JadwalController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [JadwalController::class, 'show'])->name('show');
});

Route::prefix('asesor')->name('asesor.')->group(function (){
    Route::get('/', [AsesorController::class, 'index'])->name('index');
    Route::get('/create', [AsesorController::class, 'create'])->name('create');
    Route::post('/store', [AsesorController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AsesorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AsesorController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [AsesorController::class, 'destroy'])->name('destroy');
    Route::get('/detail/{id}', [AsesorController::class, 'show'])->name('show');
});
