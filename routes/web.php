<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
route::get('/siswa/add', [SiswaController::class, 'create'])->name('siswa.create');
route::post('/siswa/add/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/add', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas/add/store', [KelasController::class, 'store'])->name('kelas.store');