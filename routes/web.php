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

// frontend
// Route::get('/', function () {
//     return view('frontend');
// });
Route::get('/', 'FrontendController@ProductShow')->name('frontend');
Route::get('/single/page/{id}', 'FrontendController@getSinglePage')->name('single');

Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}','CartController@addItem')->name('cart.addItem');
Route::post('/order/create','OrderController@OrderCollect')->name('order.create');
Route::get('/Category/{id}', 'CategoriesController@CategoryShowProduct')->name('Category.product');

// Route::post('/order/create', function () {
//     return'hi';
// })->name('order.create');



// Route::put('/cart/update/{id}', 'CartController@update');
// Route::resource('/destroy', 'CartController');

Route::get('/logout', 'Auth\LoginController@logout');


// dashboard
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware'=>['auth','admin']], function() {
	Route::get('/', function() {
		return view('admin.index');
	})->name('admin.index');

Route::get('/add/new/product', 'ProductController@getAddNewProduct')->name('add.product');
Route::post('/create/product', 'ProductController@CreateProduct')->name('product.create');

Route::get('/all/product','ProductController@ProductShow')->name('product.show');

Route::get('/orders/{type?}','OrderController@OrderShow')->name('order.show');

Route::post('/delivered/{id}', 'OrderController@DeliveredProduct')->name('delivered.product');

});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/shipping-info', 'CheckoutController@shipping')->name('checkout.shipping');
});






