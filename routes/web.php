<?php

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

Route::get('/', function () {return view('pocetna');});
Route::get('/pocetna', function () {return view('pocetna');});
Route::get('/onama', function () {return view('onama');});

Route::get('/shop', function () {
    return redirect('/');
});
Route::get('/galerija', function () {
    return redirect('/');
});
Route::get('/blog', function () {
    return redirect('/');
});

Route::get('/kontakt', function () {return view('kontakt');});
