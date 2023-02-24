<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardFAQController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\AccountController;
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
