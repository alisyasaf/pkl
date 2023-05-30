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
Route::get('/', function () {
    return view('home', [
        "title"=>"Home"
    ]);
});

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
})->middleware('auth');



// route FAQ dashboard admin (CRUD)
Route::resource('/admin/dashboard/faq', DashboardFAQController::class);


Route::resource('/admin/dashboard/mitra', MitraController::class);

Route::resource('/admin/dashboard/angsuran', AngsuranController::class);

Route::resource('/admin/dashboard/verifikasi', VerifikasiController::class);

// Manajemen akun oleh admin (Generate Akun)
Route::get('/admin/dashboard/account', [AccountController::class, 'index']);
Route::post('/admin/dashboard/account', [AccountController::class, 'store']);


Route::get('/admin/dashboard/account/generate', function () {
    return view('/admin/dashboard/account/generate', [
        'title' => "Generate Akun"
    ]);
});



// dashboard mitra
Route::get('/mitra/dashboard', function(){
    return view('mitra.dashboard.index',[
        "title"=>"Dashboard"
    ]);
})->middleware('auth');


Route::get('/mitra/dashboard/pembayaran/success', function(){
    return view('mitra.dashboard.pembayaran.success',[
        "title" => "Pembayaran Berhasil"
    ]);
});
Route::get('/mitra/dashboard/pembayaran', [PembayaranController::class, 'index']);
Route::get('/mitra/dashboard/pembayaran/{id}', [MitraController::class, 'pembayaran']);
Route::post('/mitra/dashboard/pembayaran', [PembayaranController::class, 'store']);

Route::get('/pembayaran/verifikasi/{id}', [PembayaranController::class, 'verifikasi']);

Route::get('/mitra/dashboard/angsuran', [MitraController::class, 'angsuran']);
