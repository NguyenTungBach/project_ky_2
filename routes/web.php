<?php

use App\Http\Controllers\AdminController;
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

