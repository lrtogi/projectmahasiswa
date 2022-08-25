<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa/index');
Route::get('mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa/create');
Route::post('mahasiswa/store', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa/store');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
