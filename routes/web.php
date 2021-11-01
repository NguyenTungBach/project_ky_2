<?php

use App\Http\Controllers\LayoutController;
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

Route::get('/admin/layout', [LayoutController::class, 'getLayout']);
Route::get('/admin/createProduct', [LayoutController::class, 'getCreateProduct']);
Route::get('/admin/listProduct', [LayoutController::class, 'getListProduct']);

