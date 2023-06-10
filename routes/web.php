<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardFAQController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\VerifikasiController;


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

// home page
Route::get('/', [MitraController::class, 'count'])->name('home');

// FAQ page untuk guest dan mitra
Route::get('/faq', [FAQController::class, 'index']);

// login & logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


// dashboard admin
Route::get('/admin/dashboard', function(){
    return view('admin.dashboard.index',[
        "title"=>"Dashboard"
    ]);
})->middleware('auth.admin');



// route FAQ dashboard admin (CRUD)
Route::resource('/admin/dashboard/faq', DashboardFAQController::class)
    ->middleware('auth.admin');

// Daftar Mitra
Route::resource('/admin/dashboard/mitra', MitraController::class)
    ->middleware('auth.admin');
Route::delete('/admin/dashboard/mitra', [MitraController::class, 'destroy']);


// Daftar Angsuran
Route::resource('/admin/dashboard/angsuran', AngsuranController::class)
    ->middleware('auth.admin');

// Verifikasi Bukti Bayar
Route::resource('/admin/dashboard/verifikasi', VerifikasiController::class)
    ->middleware('auth.admin');

// Manajemen akun oleh admin (Generate Akun)
Route::get('/admin/dashboard/account', [AccountController::class, 'index'])
    ->middleware('auth.admin');

Route::post('/admin/dashboard/account', [AccountController::class, 'store'])
    ->middleware('auth.admin');


Route::get('/admin/dashboard/account/generate', function () {
    return view('/admin/dashboard/account/generate', [
        'title' => "Generate Akun"
    ]);
})
->middleware('auth.admin');


// Verifikasi Pembayaran oleh Admin
Route::get('/pembayaran/verifikasi/{id}', [PembayaranController::class, 'verifikasi'])
    ->middleware('auth.admin');

// dashboard mitra
Route::get('/mitra/dashboard', [MitraController::class, 'profile'])
    ->middleware('auth.mitra')
    ->name('mitra.dashboard');


// Pembayaran
Route::get('/mitra/dashboard/pembayaran/success', function(){
    return view('mitra.dashboard.pembayaran.success',[
        "title" => "Pembayaran Berhasil"
    ]);
});

Route::get('/mitra/dashboard/pembayaran', [PembayaranController::class, 'index'])
    ->middleware('auth.mitra');

Route::get('/mitra/dashboard/pembayaran/{id}', [MitraController::class, 'pembayaran'])
    ->middleware('auth.mitra');

Route::post('/mitra/dashboard/pembayaran', [PembayaranController::class, 'store'])
    ->middleware('auth.mitra');


// Angsuran Mitra
Route::get('/mitra/dashboard/angsuran', [MitraController::class, 'angsuran'])
    ->middleware('auth.mitra');
