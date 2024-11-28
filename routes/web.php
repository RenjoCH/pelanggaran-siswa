<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;









Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('pelanggaran', PelanggaranController::class);
Route::resource('siswa', SiswaController::class);

Route::view('tampilan','template.template');

