<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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


Route::middleware('guest')->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::resource('frontpengumuman', \App\Http\Controllers\FrontpengumumanController::class);

    Route::resource('frontberita', \App\Http\Controllers\FrontberitaController::class);

    Route::resource('frontkegiatan', \App\Http\Controllers\FrontkegiatanController::class);

    Route::get('/sign-in', [LoginController::class, 'index'])->name('sign-in');

    Route::post('sign-in', [LoginController::class, 'loginStore'])->name('sign-in');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::post('logout', LoginController::class)->name('logout');

    Route::resource('aspirasi', \App\Http\Controllers\AspirasiController::class);

    Route::resource('berita', \App\Http\Controllers\BeritaController::class);

    Route::get('/hapus/berita/{id}', [App\Http\Controllers\BeritaController::class, 'destroy']);

    Route::get('/ubah/berita/{id}', [App\Http\Controllers\BeritaController::class, 'update']);

    Route::resource('pengurus', \App\Http\Controllers\PengurusController::class);

    Route::resource('testimoni', \App\Http\Controllers\TestimoniController::class);
});




// Route::get('/admins', function () {
//     return view('backend');
// });

//login
// Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/logins', [App\Http\Controllers\UserController::class, 'authenticate']);
// Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);


// Route::resource('user', \App\Http\Controllers\UserController::class);
