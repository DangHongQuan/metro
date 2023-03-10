<?php

use App\Http\Controllers\DatVeController;
use App\Http\Controllers\GaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimVeController;
use App\Http\Controllers\TuyenController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/ticket', [DatVeController::class, "index"]);
Route::get('/searchticket', [TimVeController::class, "index"]);

Route::get('/tuyen/get/{id}', [TuyenController::class, "get"]);
Route::get('/tuyen/get-info/{id}', [TuyenController::class, "getInfo"]);
Route::get('/ga/get-by-tuyen/{id}', [GaController::class, "getByTuyen"]);
Route::post('/dat-ve',[DatVeController::class, 'datVe']);
Route::get('/dat-ve/search',[TimVeController::class, 'search']);
