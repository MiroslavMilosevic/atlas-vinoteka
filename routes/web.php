<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalerijaController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {return view('pocetna');});
Route::get('/pocetna', function () {return view('pocetna');});
Route::get('/onama', function () {return view('onama');});
Route::get('/kontakt', function () {return view('kontakt');});


Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{id}', [ProductController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::get('/galerija', [GalerijaController::class, 'index']);

