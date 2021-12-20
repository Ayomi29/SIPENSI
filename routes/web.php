<?php

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
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/sempro', function () {
    return view('sempro');
});
Route::get('/sidangakhir', function () {
    return view('sidangakhir');
});
Route::get('/dosping', function () {
    return view('dosping');
});
Route::get('/pendaftaran-seminar', function () {
    return view('pendaftaran-seminar');
});
Route::get('seminar', function () {
    return view('seminar');
});
Route::get('dosenpenguji', function () {
    return view('dosenpenguji');
});
Route::get('/pendaftaran-sidang', function () {
    return view('pendaftaran-sidang');
});
Route::get('sidang', function () {
    return view('sidang');
});
