<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\HomeController;
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

Route::get('/admin/layout', [AdminController::class, 'getLayout']);
Route::get('/admin/createProduct', [AdminController::class, 'getCreateProduct']);
Route::get('/admin/listProduct', [AdminController::class, 'getListProduct']);
Route::get('/home', [HomeController::class, 'getHome']);
Route::get('/blog',[HomeController::class,'getBlog']);
Route::get('/blog-detail',[HomeController::class,'getBlogDetail']);
Route::get('/contact',[HomeController::class,'getContact']);
Route::get('/product',[HomeController::class,'getProduct']);
Route::get('/check-out',[CartController::class,'getCheckOut']);
Route::get('/shopping-cart',[CartController::class,'getCart']);
Route::get('/about-us',[HomeController::class,'getAboutUs']);
