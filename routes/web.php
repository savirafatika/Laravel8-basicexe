<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

// Route::view('/dashboard', 'dashboard');
// Route::view('/', 'page.auth.login');
// Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
});

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

// Route::get('/user/{id?}/{aktif?}', function ($id = "default", $aktif = 1) {
//     // return view('welcome');
//     return "<h1>This is my first laravel project $id $aktif</h1>";
// })->where('id', '[a-z]*');

// Route::post('simpan', function () {
//     return "data berhasil disimpan";
// });

// Route::put('simpan', function () {
//     return "data berhasil disimpan";
// });

// Route::get('crud', function () {
//    return view('crud', ['nama' => 'Savira']);
// });

// Route::prefix('master-data')->group(function () {
//    Route::get('/data-karyawan', [CrudController::class, 'index'])->name('dashboard');
//    Route::get('/data-kerja', [CrudController::class, 'edit'])->name('dashboard');
// });

// Route::name('master-data.')->group(function () {
//    Route::get('master-data/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//    Route::get('master-data/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });

// Route::name('master-data.')->prefix('master-data')->group(function () {
//    Route::get('/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//    Route::get('/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });

// Route::get('/home', [CrudController::class, 'index'])->name('dashboard');
