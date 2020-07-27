<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','FrontendController@index')->name('main');
Route::get('/products/{slug}','FrontendController@categoryProduct');
Route::get('/category/{slug}','FrontendController@subcategories');
Route::get('/products','FrontendController@allProduct');
Route::get('/offer','FrontendController@offerProduct');
Route::get('/pre-order','FrontendController@pre_order');
Route::post('/search','FrontendController@searchProduct');
Route::get('/product/{slug}','FrontendController@singleproduct')->name('freontend.product.shop');
Route::get('/customer/login','FrontendController@cus_login');
Route::get('/checkout','FrontendController@checkout');

Route::post('/customer/registation','CustomerController@customerData')->name('customer.registation');
Route::post('/customer/login','CustomerController@customerlogin')->name('customer.login');
Route::post('/customer/logout','CustomerController@customerlogout')->name('customer.logout');
Route::get('/customer/profile','CustomerController@customerprofile')->name('customer.profile');
Route::post('/customer/review','CustomerController@customerreview')->name('customer.review');

Route::get('/contact-us','FrontendController@contact_us')->name('amru.contact');
Route::get('/about-us','FrontendController@about_us')->name('amru.about');
Route::get('/addCart/product/{id}','CartProductController@index');
Route::get('/customer/cartproduct/remove/{id}','CartProductController@remove');
Route::get('/cart/product','CartProductController@cartProduct');
Route::post('/cart/update','CartProductController@cartUpdate')->name('updateCart');
Route::post('/chechout/orderProduct','CheckoutController@orderProduct');
Route::get('/cart/product/get','CartProductController@getCartProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('/admin','adminController@index');
// Route::get('/admin/login','adminController@login');
Route::get('/admin/customer/all','adminController@allcustomer')->name('customer.all');
//basic setup
Route::get('/admin/basic/setup','BasicsetupController@index');
Route::post('/admin/basic/update','BasicsetupController@updateSetup')->name('basic.update');
Route::get('/admin/banner/setup','BasicsetupController@banner');
Route::get('/admin/slider/all','BasicsetupController@getSlider');
// Route::post('admin/slider/add','BasicsetupController@newSlider');
Route::get('/admin/slider/delete/{id}','BasicsetupController@deleteSlider');
Route::post('admin/slider/add','BasicsetupController@newSlider');
Route::post('/admin/slider/update','BasicsetupController@updateSlider');
Route::get('/admin/setting/about-us','BasicsetupController@about_us');
Route::post('admin/about/update','BasicsetupController@updateAbout')->name('about.update');

Route::get('/admin/employee','employeecontroller@index');


Route::get('/admin/category','CategoryController@index')->name('admin.category.index');
Route::get('/admin/category/getData','CategoryController@showCategory');
Route::post('/admin/category','CategoryController@store')->name('category.store');
Route::post('/admin/category/update','CategoryController@update')->name('category.update');
Route::get('/admin/category/destroy/{id}', 'CategoryController@destroy');

Route::get('/admin/sub_category', 'SubCategoryController@index')->name('admin.subcategory.index');
Route::get('/admin/subcategory/getData','SubCategoryController@getSubcategory');
Route::get('/admin/subcategory/destroy/{id}', 'SubCategoryController@subdestroy');
Route::post('/admin/subcategory/update','SubCategoryController@updateSubcategory')->name('subcategory.update');
Route::post('/admin/sub_category', 'SubCategoryController@storeData')->name('admin.subcategory.store');

Route::get('admin/supplier','SupplierController@index')->name('supplier.index');
Route::post('admin/supplier','SupplierController@store')->name('supplier.store');
Route::get('admin/supplier/getdata','SupplierController@getdata')->name('supplier.getdata');
Route::get('/admin/supplier/delete/{id}','SupplierController@deleteData');

// Purchase Controller
Route::get('/admin/purchase','PurchaseController@index')->name('purchase.index');
Route::get('/admin/purchase/item','PurchaseController@purchaseItem')->name('purchase.item');
Route::get('/admin/purchase/getPurchase','PurchaseController@getdata')->name('purchase.getItem');
Route::post('/admin/purchsae','PurchaseController@storeData')->name('purchase.store');
Route::get('/admin/purchase/delete/{id}','PurchaseController@deleteItem');
Route::get('/admin/purchase/cart/{id}','PurchaseController@addCart');

Route::get('/admin/get/cartitem','PurchaseController@getcontentItem');
Route::get('/admin/purchase/remove/{id}','PurchaseController@removeItem');
Route::post('/admin/purchase/productData','PurchaseCOntroller@purchaseProduct')->name('purchase.product');
Route::get('/admin/purchase/purchaselist','PurchaseController@purchaselist')->name('purchase.purchaselist');
Route::get('/admin/purchase/edit/{id}','PurchaseController@editPurchase');
Route::get('/admin/purchase/view/{id}','PurchaseController@viewPurchase');
Route::get('/admin/purchase/delete/{id}','PurchaseController@deletePurchase');

//Product Controler
Route::get('/admin/product/new','ProductController@index')->name('admin.product');
Route::get('/admin/subcat/{cat_slug}','ProductController@getSubcategories');
Route::post('/admin/product/storeProduct','ProductController@storeProduct')->name('admin.product.storeProduct');
Route::get('/admin/product/all','ProductController@listProduct')->name('admin.product_list');
Route::get('/admin/product/edit/{id}','ProductController@editProduct');
Route::post('/admin/product/update','ProductController@updateProduct')->name('product.update');
Route::get('/admin/product/getData','ProductController@getProduct');
Route::get('/admin/product/destroy/{id}','ProductController@deleteProduct');


Route::get('/admin/product/stock','ProductController@stockProduct');

Route::get('/admin/oder/request','OrderController@index');
Route::get('/admin/oder/delete/{id}','OrderController@deleteOrder');
Route::get('/admin/orderp/view/{id}','OrderController@vieworder');
Route::get('/admin/orderP/accept/{id}','OrderController@confirm');
Route::get('/admin/order/confirmlist','OrderController@confirmlist');


});