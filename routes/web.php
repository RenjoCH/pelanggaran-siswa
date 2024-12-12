<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StundentController;









Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('pelanggaran', PelanggaranController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('data-siswa', StudentController::class);

Route::view('tampilan','template.template');

