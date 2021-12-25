<?php

use App\Http\Controllers\DosenPembimbingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PendaftaranSeminarController;
use App\Http\Controllers\PendaftaranSidangController;
use App\Models\DosenPembimbing;
use App\Models\PendaftaranSidang;

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

Route::get('/', [RouteController::class, 'home']);

Route::get('/dashboard', [RouteController::class, 'dashboard'])->middleware('auth');

Route::get('/about', [RouteController::class, 'about'])->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/sempro', [RouteController::class, 'sempro'])->middleware('auth');


Route::get('/sidangakhir', [RouteController::class, 'sidangakhir'])->middleware('auth');

/* Route::get('/dosenpembimbing', [DosenPembimbingController::class, 'dosenpembimbing'])->middleware('auth');
Route::get('/dosenpembimbing/create', [DosenPembimbingController::class, 'create']);
Route::get('/dosenpembimbing/edit', [DosenPembimbingController::class, 'edit']);
Route::post('/dosenpembimbing', [DosenPembimbingController::class, 'store']);
Route::post('/dosenpembimbing', [DosenPembimbingController::class, 'store_data']);
Route::post('/dosenpembimbing/edit', [DosenPembimbingController::class, 'update']);
Route::post('/dosenpembimbing', [DosenPembimbingController::class, 'destroy']); */
Route::resource('/dosenpembimbing', DosenPembimbingController::class);


Route::get('/pendaftaran-seminar', [PendaftaranSeminarController::class, 'pendaftaran_seminar'])->middleware('auth');
Route::post('/pendaftaran-seminar', [PendaftaranSeminarController::class, 'store']);

Route::get('seminar', [RouteController::class, 'seminar'])->middleware('auth');

Route::get('dosenpenguji', [RouteController::class, 'dosenpenguji'])->middleware('auth');

Route::get('/pendaftaran-sidang', [PendaftaranSidangController::class, 'pendaftaran_sidang'])->middleware('auth');
Route::post('/pendaftaran-sidang', [PendaftaranSidangController::class, 'store']);

Route::get('sidang', [RouteController::class, 'sidang'])->middleware('auth');
