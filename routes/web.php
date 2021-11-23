<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\client\AboutUsController;
use App\Http\Controllers\client\BlogController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ProductController;
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
//============================================== ADMIN =================================================================
//***************************** Example ************************************
Route::prefix('admin')->group(function(){
    Route::get('/form', [Admincontroller::class, 'getForm']);
    Route::get('/table', [Admincontroller::class, 'getTable']);
});
//***************************** Product ************************************
Route::get('admin/products', [\App\Http\Controllers\admin\ProductController::class, 'getAll']);
Route::prefix('admin/product')->group(function(){
    //lấy ra form
    Route::get('/creat', [\App\Http\Controllers\admin\ProductController::class, 'getForm']);
    // lấy thông tin trên form rồi tạo mới
    Route::post('/creat', [\App\Http\Controllers\admin\ProductController::class, 'creat']);

    //lấy thông tin đưa ra form
    Route::get('/update/{id}', [\App\Http\Controllers\admin\ProductController::class, 'getInformation']);
    //lấy thông tin sau khi chỉnh sửa rồi update
    Route::post('/update', [\App\Http\Controllers\admin\ProductController::class, 'update']);

    //xác nhận lại người dùng có muốn xoá không rồi mới xoá
    // không xoá cứng mà update status = 0 và cập nhật deleted_at = Carbon.now()
    Route::get('/delete/{id}', [\App\Http\Controllers\admin\ProductController::class, 'delete']);

    Route::get('/search', [\App\Http\Controllers\admin\ProductController::class, 'search']);
});
//***************************** Category ************************************
Route::get('admin/categories', [CategoryController::class, 'getAll']);
Route::prefix('admin/category')->group(function(){
    //lấy ra form
    Route::get('/creat', [CategoryController::class, 'getForm']);
    // lấy thông tin trên form rồi tạo mới
    Route::post('/creat', [CategoryController::class, 'creat']);

    //lấy thông tin đưa ra form
    Route::get('/update/{id}', [CategoryController::class, 'getInformation']);
    //lấy thông tin sau khi chỉnh sửa rồi update
    Route::get('/update', [CategoryController::class, 'update']);

    //xác nhận lại người dùng có muốn xoá không rồi mới xoá
    // không xoá cứng mà update status = 0 và cập nhật deleted_at = Carbon.now()
    Route::get('/delete', [CategoryController::class, 'delete']);

    Route::get('/search', [CategoryController::class, 'search']);
});
//***************************** Order ************************************
Route::get('admin/orders', [OrderController::class, 'getAll']);
Route::prefix('admin/order')->group(function(){
    // hiển thị thông tin order
    Route::get('/detail/{id}', [OrderController::class, 'getInformation']);
    //update các trạng thái của order
    Route::get('/update/{status}', [OrderController::class, 'updateStatus']);

    //xoá đơn hàng(xoá mềm)
    Route::get('/delete/{id}', [OrderController::class, 'delete']);

    Route::get('/search', [OrderController::class, 'search']);
});

//======================================================================================================================
//========================================= CLIENT =====================================================================
Route::get('/home',[HomeController::class, 'getHome']);

Route::get('/products',[ProductController::class, 'getShop']);
Route::get('/product/{id}',[ProductController::class, 'getDetail']);

Route::get('/homegrown',[ContactController::class, 'getHome']);

Route::get('/contact',[ContactController::class, 'getContact']);

Route::get('/blog',[BlogController::class, 'getBlog']);

Route::get('/about-us',[AboutUsController::class, 'getAboutUs']);

Route::get('/cart',[CartController::class, 'getCart']);
Route::get('/checkout',[CartController::class, 'getCheckOut']);

