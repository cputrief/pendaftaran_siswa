<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\pendaftaransController;


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
    return view('layouts.pendaftaran.dashboard');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/template', function () {
    return view('layouts.template');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/siswa', function () {
    return view('dt_siswa');
});

Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/form siswa', function () {
    return view('form_siswa');
});

Route::get('/guru', function () {
    return view('dt_guru');
});

Route::get('/kelas', function () {
    return view('dt_kelas');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/add admin', function () {
    return view('add_admin');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();
// pendaftaran siswa
// Route::get('/home', [PendaftaranController::class, 'index']);
// Route::resource('/pendaftarans', PendaftaranController::class)->except(['index']);


// // guru
// Route::get('/guru', [guruController::class, 'index']);
