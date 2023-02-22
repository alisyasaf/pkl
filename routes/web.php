<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuktiBayarController;
use App\Http\Controllers\DashboardFAQController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\LoginController;

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
    return view('home', [
        "title"=>"Home"
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        "title"=>"Dashboard"
    ]);
})->middleware('auth');

Route::get('/dashboard/generate', function(){
    return view('/dashboard/generate',[
        "title"=>"Generate Akun Mitra"
    ]);
});

Route::get('/faq', [FAQController::class, 'index']);

//route FAQ dashboard admin
Route::resource('/dashboard/faq', DashboardFAQController::class);


Route::get('/entry-bukti',[BuktiBayarController::class,'index']);
Route::post('/entry-bukti', [BuktiBayarController::class, 'store']);




Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    //semua route dalam grup ini hanya bisa diakses oleh admin
});

Route::get('/generate', function () {
    return view('generate', [
        'title' => "Generate Akun"
    ]);
});

Route::get('/laporan-perkembangan-usaha', function () {
    return view('laporan', [
        'title' => "Laporan Perkembangan Usaha"
    ]);
});

Route::get('/dashboard-admin', function () {
    return view('dashboardAdmin', [
        'title' => "Dashboard Admin"
    ]);
});

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::get('/mitra', [MitraController::class, 'index'])->name('mitra');

    //semua route dalam grup ini hanya bisa diakses mitra
});
