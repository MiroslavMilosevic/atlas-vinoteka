<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalerijaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AdminController;
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

/*
|--------------------------------------------------------------------------
| Routes For Static Pages
|--------------------------------------------------------------------------
*/
Route::get('/', [StaticController::class, 'pocetna']);
Route::get('/pocetna', [StaticController::class, 'pocetna']);
Route::get('/onama', [StaticController::class, 'onama']);
Route::get('/kontakt', [StaticController::class, 'kontakt']);
Route::get('/welcome', [StaticController::class, 'welcome']);
/*
|--------------------------------------------------------------------------
| Routes For Static Pages
|--------------------------------------------------------------------------
*/

Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{id}', [ProductController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::get('/galerija', [GalerijaController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Routes For Admins
|--------------------------------------------------------------------------
*/
 Route::get('/admin', [AdminController::class, 'main']);
 Route::get('/admin/products', [AdminController::class, 'adminShowProducts']);
 Route::get('/admin/blogs', [AdminController::class, 'adminShowBlogs']);
 Route::get('/admin/galerija', [AdminController::class, 'adminShowGalerija']);
//  Route::get('/admin', [AdminController::class, 'main']);
//  Route::get('/admin', [AdminController::class, 'main']);
//  Route::get('/admin', [AdminController::class, 'main']);
/*
|--------------------------------------------------------------------------
| Routes For Admins
|--------------------------------------------------------------------------
*/
