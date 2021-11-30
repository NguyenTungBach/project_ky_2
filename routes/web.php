<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\client\AboutUsController;
use App\Http\Controllers\client\BlogController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\FarmController;
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
Route::prefix('admin')->group(function () {
    Route::get('/form', [Admincontroller::class, 'getForm']);
    Route::get('/table', [Admincontroller::class, 'getTable']);
});
//***************************** Product ************************************
Route::get('admin/products', [\App\Http\Controllers\admin\ProductController::class, 'getAll']);

//lấy ra form
Route::get('admin/product/form', [\App\Http\Controllers\admin\ProductController::class, 'getForm']);
// lấy thông tin trên form rồi tạo mới
Route::post('admin/product/form', [\App\Http\Controllers\admin\ProductController::class, 'create']);

// lấy thông tin chi tiết
Route::get('admin/product/{id}', [\App\Http\Controllers\admin\ProductController::class, 'getDetail']);

//lấy thông tin đưa ra form
Route::get('admin/product/update/{id}', [\App\Http\Controllers\admin\ProductController::class, 'getInformation']);
//lấy thông tin sau khi chỉnh sửa rồi update
Route::post('admin/product/update', [\App\Http\Controllers\admin\ProductController::class, 'update']);

//xác nhận lại người dùng có muốn xoá không rồi mới xoá
// không xoá cứng mà update status = 0 và cập nhật deleted_at = Carbon.now()
Route::get('admin/product/delete/{id}', [\App\Http\Controllers\admin\ProductController::class, 'delete']);

Route::get('admin/product/search', [\App\Http\Controllers\admin\ProductController::class, 'search']);

//***************************** Category ************************************
Route::get('admin/categories', [CategoryController::class, 'getAll']);

//lấy ra form
Route::get('admin/category/form', [CategoryController::class, 'getForm']);
// lấy thông tin trên form rồi tạo mới
Route::post('admin/category/form', [CategoryController::class, 'create']);

// lấy thông tin chi tiết
Route::get('admin/category/{id}', [CategoryController::class, 'getDetail']);

//lấy thông tin đưa ra form
Route::get('admin/category/update/{id}', [CategoryController::class, 'getInformation']);
//lấy thông tin sau khi chỉnh sửa rồi update
Route::get('admin/category/update', [CategoryController::class, 'update']);

//xác nhận lại người dùng có muốn xoá không rồi mới xoá
// không xoá cứng mà update status = 0 và cập nhật deleted_at = Carbon.now()
Route::get('admin/category/delete', [CategoryController::class, 'delete']);

Route::get('admin/category/search', [CategoryController::class, 'search']);

//***************************** Order ************************************
Route::get('admin/orders', [OrderController::class, 'getAll']);

// hiển thị thông tin order
Route::get('admin/order/{id}', [OrderController::class, 'getInformation']);
//update các trạng thái của order
Route::get('admin/order/update/{status}', [OrderController::class, 'updateStatus']);

//xoá đơn hàng(xoá mềm)
Route::get('admin/order/delete/{id}', [OrderController::class, 'delete']);

Route::get('admin/order/search', [OrderController::class, 'search']);

//======================================================================================================================
//========================================= CLIENT =====================================================================
Route::get('/home', [HomeController::class, 'getHome']);

Route::get('/products', [ProductController::class, 'getShop']);
Route::get('/product/search', [ProductController::class, 'index']);
Route::get('/product/recent-view', [ProductController::class, 'getRecent']);
Route::get('/product/{id}', [ProductController::class, 'getDetail']);

Route::get('/farm', [FarmController::class, 'getFarms']);

Route::get('/contact', [ContactController::class, 'getContact']);

Route::get('/blog', [BlogController::class, 'getBlog']);

Route::get('/about', [AboutUsController::class, 'getAboutUs']);

// Cart
Route::get('/cart', [CartController::class, 'getCart']);
Route::get('/cart/add', [CartController::class, 'add']); // addToCart đã chuyển thành add, bỏ {id}
Route::post('/cart/update', [CartController::class, 'update']);
Route::get('/cart/remove', [CartController::class, 'remove']);

// Checkout
Route::post('/order', [\App\Http\Controllers\client\OrderController::class, 'process']);
Route::get('/order/{id}', [\App\Http\Controllers\client\OrderController::class, 'getDetail']);
Route::post('/order/create-payment', [\App\Http\Controllers\client\OrderController::class, 'createPayment']);
Route::post('/order/execute-payment', [\App\Http\Controllers\client\OrderController::class, 'executePayment']);
Route::get('/check-mail', [\App\Http\Controllers\client\OrderController::class, 'getCheckMail']);
