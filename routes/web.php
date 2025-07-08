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
    return view('layouts.pendaftaran.home');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/template', function () {
    return view('layouts.template');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran/create', [pendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran/store', [pendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::resource('pendaftaran', PendaftaranController::class);


// guru
Route::get('/guru', [guruController::class, 'index']);
