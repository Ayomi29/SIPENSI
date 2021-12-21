<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', [RouteController::class, 'dashboard']);
Route::get('/dashboard', [RouteController::class, 'dashboard']);
Route::get('/home', [RouteController::class, 'home']);
Route::get('/about', [RouteController::class, 'about']);
Route::get('/login', [RouteController::class, 'login']);
Route::get('/sempro', [RouteController::class, 'sempro']);
Route::get('/sidangakhir', [RouteController::class, 'sidangakhir']);
Route::get('/dosping', [RouteController::class, 'dosenpembimbing']);
Route::get('/pendaftaran-seminar', [RouteController::class, 'pendaftaran_seminar']);
Route::get('seminar', [RouteController::class, 'seminar']);
Route::get('dosenpenguji', [RouteController::class, 'dosenpenguji']);
Route::get('/pendaftaran-sidang', [RouteController::class, 'pendaftaran_sidang']);
Route::get('sidang', [RouteController::class, 'sidang']);
