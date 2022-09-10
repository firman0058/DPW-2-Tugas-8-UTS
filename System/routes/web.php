<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomenAdminController;
use App\Http\Controllers\KomenController;


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


//client pengunjung
Route::get('/', [ClientController::class, 'showHome']);
Route::get('artikel', [ClientController::class, 'showArtikel']);
Route::get('home', [ClientController::class, 'showHome']);
Route::get('artikel/{artikel}', [ClientController::class, 'showArtikel']);


//admin
Route::get('beranda', [HomeController::class, 'showBeranda']);

// route::prefix('admin')->middleware('auth')->group(function () {
//     Route::post('artikel/filter', [ArtikelController::class, 'filter']);
//     Route::resource('artikel', ArtikelController::class);
// });

Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);

Route::get('artikel', [ArtikelController::class, 'index']);
Route::get('artikel/create', [ArtikelController::class, 'create']);
Route::post('artikel', [ArtikelController::class, 'store']);
Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('artikel/{artikel}', [ArtikelController::class, 'destroy']);
Route::post('artikel/filter', [ArtikelController::class, 'filter']);

Route::get('komen', [KomenAdminController::class, 'index']);
Route::get('komen/{komen}', [KomenAdminController::class, 'show']);
Route::post('komen', [KomenAdminController::class, 'store']);
Route::get('komen/{komen}', [KomenController::class, 'show']);

Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginprocess']);
Route::get('/logout', [AuthController::class, 'logout']);
