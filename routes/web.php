<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemodayController;
use App\Http\Controllers\HariPentingController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home',[MemodayController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'halamanLogin'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');
Route::post('/simpanRegistrasi',[LoginController::class,'simpanRegistrasi'])->name('simpanRegistrasi');
Route::post('/memoInput/proses',[MemodayController::class,'postMemo'])->name('postMemo');
Route::post('/hari-penting', [HariPentingController::class, 'store'])->name('hari_penting.store');
Route::get('/tampilkandata/{id}',[MemodayController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[MemodayController::class,'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[MemodayController::class,'delete'])->name('delete');
Route::post('/memoDay/update-status', [MemodayController::class, 'updateStatus'])->name('memo.updateStatus');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
