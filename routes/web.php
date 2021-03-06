<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\client\AboutUsController;
use App\Http\Controllers\client\BlogController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\FarmController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
//Route::get('/clear-cache', function() {
//    Artisan::call('cache:clear');
//    return "Cache is cleared";
//});

//============================================== ADMIN =================================================================
//************************************Login and Register*************
Route::get('admin/login', [AdminController::class, 'showLogin']);
Route::post('admin/login', [AdminController::class, 'postLogin'])->name('auth.login');
Route::get('admin/register', [AdminController::class, 'showRegister']);
Route::post('admin/register', [AdminController::class, 'register']);
Route::get('admin/logOut', [AdminController::class, 'logOut'])->name('auth.logOut');
//***************************** Dashboard ************************************
Route::get('admin/dashboard', [DashboardController::class, 'displayDashboard']);
Route::post('admin/dashboard/findChart', [DashboardController::class, 'findChart']);

//***************************** Product ************************************
Route::get('admin/products', [\App\Http\Controllers\admin\ProductController::class, 'getAll']);

//l???y ra form
Route::get('admin/product/form', [\App\Http\Controllers\admin\ProductController::class, 'getForm']);
// l???y th??ng tin tr??n form r???i t???o m???i
Route::post('admin/product/form', [\App\Http\Controllers\admin\ProductController::class, 'create']);
// l???c s???n ph???m
Route::get('/admin/product/search', [\App\Http\Controllers\admin\ProductController::class,'search']);
// c???p nh???t tr???ng th??i theo check
Route::post('/admin/product/update-multi/status', [\App\Http\Controllers\admin\ProductController::class,'updateAllStatus'])->name('product.update-multi');

// l???y th??ng tin chi ti???t
Route::get('admin/product/{id}', [\App\Http\Controllers\admin\ProductController::class, 'getDetail']);

//l???y th??ng tin ????a ra form
Route::get('admin/product/update/{id}', [\App\Http\Controllers\admin\ProductController::class, 'getInformation']);
//l???y th??ng tin sau khi ch???nh s???a r???i update
Route::post('admin/product/update', [\App\Http\Controllers\admin\ProductController::class, 'update']);

//x??c nh???n l???i ng?????i d??ng c?? mu???n xo?? kh??ng r???i m???i xo??
// kh??ng xo?? c???ng m?? update status = 0 v?? c???p nh???t deleted_at = Carbon.now()
Route::get('admin/product/delete/{id}', [\App\Http\Controllers\admin\ProductController::class, 'getConfirmDelete']);
Route::post('admin/product/delete', [\App\Http\Controllers\admin\ProductController::class, 'delete']);


//***************************** Category ************************************
Route::get('admin/categories', [CategoryController::class, 'getAll']);

//l???y ra form
Route::get('/admin/category/form', [CategoryController::class, 'getForm']);
// l???y th??ng tin tr??n form r???i t???o m???i
Route::post('/admin/category/form/create', [CategoryController::class, 'create']);

// l???y th??ng tin chi ti???t
Route::get('admin/category/{id}', [CategoryController::class, 'getDetail']);

//l???y th??ng tin ????a ra form
Route::get('admin/category/update/{id}', [CategoryController::class, 'getInformation']);
//l???y th??ng tin sau khi ch???nh s???a r???i update
Route::post('admin/category/update', [CategoryController::class, 'update']);

//x??c nh???n l???i ng?????i d??ng c?? mu???n xo?? kh??ng r???i m???i xo??
// kh??ng xo?? c???ng m?? update status = 0 v?? c???p nh???t deleted_at = Carbon.now()
Route::get('admin/category/delete/{id}', [CategoryController::class, 'getConfirmDelete']);
Route::post('admin/category/delete', [CategoryController::class, 'delete']);

Route::get('admin/category/search', [CategoryController::class, 'search']);

//***************************** Farms ************************************
Route::get('/admin/farms', [\App\Http\Controllers\admin\FarmController::class, 'getAll']);
//l???y ra form
Route::get('/admin/farm/form', [\App\Http\Controllers\admin\FarmController::class, 'getForm']);
// l???y th??ng tin tr??n form r???i t???o m???i
Route::post('/admin/farm/form', [\App\Http\Controllers\admin\FarmController::class, 'create']);

Route::get('/admin/farm/detail/{id}', [\App\Http\Controllers\admin\FarmController::class, 'getDetail']);
Route::get('/admin/farm/update/{id}', [\App\Http\Controllers\admin\FarmController::class, 'getInformation']);
Route::get('/admin/farm/search', [\App\Http\Controllers\admin\FarmController::class, 'search']);

Route::post('/admin/farm/update', [\App\Http\Controllers\admin\FarmController::class, 'update']);
Route::get('/admin/farm/delete/{id}', [\App\Http\Controllers\admin\FarmController::class, 'getConfirmDelete']);
Route::post('/admin/farm/delete', [\App\Http\Controllers\admin\FarmController::class, 'delete']);


//***************************** Blog-Farms ************************************
Route::get('/admin/blog/farms', [\App\Http\Controllers\admin\BlogFarmController::class, 'getAll']);
//l???y ra form
Route::get('/admin/blog/farm/form', [\App\Http\Controllers\admin\BlogFarmController::class, 'getForm']);
//// l???y th??ng tin tr??n form r???i t???o m???i
Route::post('/admin/farm/form', [\App\Http\Controllers\admin\BlogFarmController::class, 'create']);
//
Route::get('/admin/blog/farm/detail/{id}', [\App\Http\Controllers\admin\BlogFarmController::class, 'getDetail']);
Route::get('/admin/blog/farm/update/{id}', [\App\Http\Controllers\admin\BlogFarmController::class, 'getInformation']);
Route::get('/admin/blog/farm/search', [\App\Http\Controllers\admin\BlogFarmController::class, 'search']);
//
Route::post('/admin/blog/farm/update', [\App\Http\Controllers\admin\BlogFarmController::class, 'update']);
Route::get('/admin/blog/farm/delete/{id}', [\App\Http\Controllers\admin\BlogFarmController::class, 'getConfirmDelete']);
Route::post('/admin/blog/farm/delete', [\App\Http\Controllers\admin\BlogFarmController::class, 'delete']);

Route::post('admin/farm/remove-multi/status', [\App\Http\Controllers\admin\FarmController::class, 'removeAllStatus'])->name('farm.remove-multi');
Route::post('admin/farm/update-multi/status', [\App\Http\Controllers\admin\FarmController::class, 'updateAllStatus'])->name('farm.update-multi');

//***************************** Order ************************************
Route::get('admin/orders', [OrderController::class, 'getAll']);

// hi???n th??? th??ng tin order
Route::get('admin/order/detail/{id}', [OrderController::class, 'getInformation']);

//update c??c tr???ng th??i c???a order
Route::post('admin/order/update/status', [OrderController::class, 'updateStatus']);
Route::post('admin/order/remove-multi/status', [OrderController::class, 'removeAllStatus'])->name('order.remove-multi');
Route::post('admin/order/update-multi/status', [OrderController::class, 'updateAllStatus'])->name('order.update-multi');

//download excel
Route::post('admin/order/export', [OrderController::class, 'exportOrder']);

//xo?? ????n h??ng(xo?? m???m)
Route::get('admin/order/delete/{id}', [OrderController::class, 'delete']);

//T??m ki???m
Route::get('admin/order/search', [OrderController::class, 'index']);
Route::get('admin/order/search-product/{id}', [OrderController::class, 'searchByIdProduct']);
Route::get('admin/order/search-date/{date}', [OrderController::class, 'searchByDate']);

//***************************** Blog ************************************
Route::get('/admin/blog/search', [\App\Http\Controllers\admin\BlogController::class, 'search']);
Route::get('admin/blogs',[\App\Http\Controllers\admin\BlogController::class,'getAll']);
Route::get('admin/blog/form',[\App\Http\Controllers\admin\BlogController::class,'getForm']);
Route::post('admin/blog/form',[\App\Http\Controllers\admin\BlogController::class,'createBlog']);
Route::get('admin/blog/{id}',[\App\Http\Controllers\admin\BlogController::class,'getDetail']);
Route::get('admin/blog/update/{id}',[\App\Http\Controllers\admin\BlogController::class,'getInformation']);
Route::post('admin/blog/update',[\App\Http\Controllers\admin\BlogController::class,'update']);
Route::get('admin/blog/delete/{id}', [\App\Http\Controllers\admin\BlogController::class, 'getConfirmDelete']);
Route::post('admin/blog/delete', [\App\Http\Controllers\admin\BlogController::class, 'delete']);

Route::post('admin/blog/remove-multi/status', [\App\Http\Controllers\admin\BlogController::class, 'removeAllStatus'])->name('blog.remove-multi');
Route::post('admin/blog/update-multi/status', [\App\Http\Controllers\admin\BlogController::class, 'updateAllStatus'])->name('blog.update-multi');
//***************************** Contact ************************************
Route::get('admin/contacts',[\App\Http\Controllers\admin\ContactController::class,'getAll']);
Route::get('admin/contact/detail/{id}',[\App\Http\Controllers\admin\ContactController::class,'getDetail']);
Route::post('admin/contact/update/status',[\App\Http\Controllers\admin\ContactController::class,'updateStatus']);
Route::post('admin/contact/update-multi/status',[\App\Http\Controllers\admin\ContactController::class,'updateAllStatus'])->name('contact.update-multi.status');

// t??m ki???m
Route::get('admin/contact/search',[\App\Http\Controllers\admin\ContactController::class,'search']);

//***************************** User ************************************
Route::get('admin/users',[\App\Http\Controllers\admin\UserController::class,'getAll']);
Route::get('admin/user/search',[\App\Http\Controllers\admin\UserController::class,'search']);

//l???y th??ng tin ????a ra form
Route::get('admin/user/detail/{id}', [\App\Http\Controllers\admin\UserController::class, 'getDetail']);
Route::get('admin/user/update/{id}', [\App\Http\Controllers\admin\UserController::class, 'getInformation']);
//l???y th??ng tin sau khi ch???nh s???a r???i update
Route::post('admin/user/update', [\App\Http\Controllers\admin\UserController::class, 'update']);
Route::post('admin/user/remove-multi/status', [\App\Http\Controllers\admin\UserController::class, 'removeAllStatus'])->name('user.remove-multi');
Route::post('admin/user/update/status', [\App\Http\Controllers\admin\UserController::class, 'updateStatus']);


//======================================================================================================================
//========================================= CLIENT =====================================================================
Route::get('/', [HomeController::class, 'getHome']);

Route::get('/products', [ProductController::class, 'getShop']);
Route::get('/product/search', [ProductController::class, 'index']);
Route::get('/product/farm/{id}', [ProductController::class, 'searchFarm']);
Route::get('/product/recent-view', [ProductController::class, 'getRecent']);
Route::get('/product/{id}', [ProductController::class, 'getDetail'])->name('product.getDetail');

Route::get('/farm', [FarmController::class, 'getFarms'])->name('farm.getFarms');
Route::get('/farm/detail/{id}', [FarmController::class, 'getDetail'])->name('farm.getDetail');

Route::get('/contact', [ContactController::class, 'getContact']);
Route::post('/contact', [ContactController::class, 'contact'])->name('client.contact');

Route::get('/blog', [BlogController::class, 'getBlog']);
Route::get('/blogs/{id}', [BlogController::class, 'getDetail']);

Route::get('/about', [AboutUsController::class, 'getAboutUs']);

// Cart
Route::get('/cart', [CartController::class, 'getCart']);
Route::post('/cart/add', [CartController::class, 'add'])->name('client.cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('client.cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('client.cart.remove');

// Checkout
Route::post('/order', [\App\Http\Controllers\client\OrderController::class, 'process']);
Route::get('/order/{id}', [\App\Http\Controllers\client\OrderController::class, 'getDetail'])->name('order.getDetail');
Route::post('/order/create-payment', [\App\Http\Controllers\client\OrderController::class, 'createPayment']);
Route::post('/order/execute-payment', [\App\Http\Controllers\client\OrderController::class, 'executePayment']);
Route::get('/check-mail', [\App\Http\Controllers\client\OrderController::class, 'getCheckMail']);

// User
Route::get('/user/register', [UserController::class,'getForm']);
Route::post('/user/register', [UserController::class,'create']);
Route::get('/user/edit/{id}', [UserController::class,'getFormEdit']);
Route::post('/user/edit', [UserController::class,'edit']);

Route::get('/user/information', [UserController::class,'getInformation']);

Route::get('/user/login', [UserController::class,'getLogin']);
Route::post('/user/login', [UserController::class,'login']);
Route::get('/user/logOut', [UserController::class,'logOut']);
Route::get('/user/orders', [UserController::class,'getOrder']);
