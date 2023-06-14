<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TanahController;
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

Route::get('/Dashboard', [DashboardController::class, 'index'] );
Route::get('/Tanah', [TanahController::class, 'index'] );
Route::get('/Tanah/create', [TanahController::class, 'create'] );
Route::post('/Tanah', [TanahController::class, 'store'] );
