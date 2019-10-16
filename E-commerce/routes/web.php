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

Route::get('/','welcomeController@index');
Route::get('/frontcategory/{id}','welcomeController@category');
Route::get('/contact','welcomeController@contact');
Route::get('/productDetails/{id}','welcomeController@productDetails');

//cart
Route::post('/cart/add',[
    'uses' => 'cartController@addToCart',
    'as' =>'add-to-cart'
    
]);

Route::get('/cart/show',[
    'uses' => 'cartController@showToCart',
    'as' =>'show-cart'

]);
Route::get('/cart/delete/{id}',[
    'uses' => 'cartController@deleteToCart',
    'as' =>'delete-cart-item'

]);
Route::post('/cart/update',[
    'uses' => 'cartController@updateToCart',
    'as' =>'update-cart'

]);
Route::get('/checkout',[
    'uses' => 'checkoutController@index',
    'as' =>'checkout'

]);
Route::post('/customer/registration',[
    'uses' => 'checkoutController@customerSignUp',
    'as' =>'customer-sign-up'

]);
Route::get('/checkout/shipping',[
    'uses' => 'checkoutController@shippingForm',
    'as' =>'checkout-shipping'

]);
Route::Post('/shipping/save',[
    'uses' => 'checkoutController@saveShippingInfo',
    'as' =>'new-shipping'

]);
Route::get('/checkout/payment',[
    'uses' => 'checkoutController@paymentForm',
    'as' =>'checkout-payment'

]);
Route::post('/checkout/order',[
    'uses' => 'checkoutController@newOrder',
    'as' =>'new-order'

]);
Route::get('/complete/order',[
    'uses' => 'checkoutController@completeOrder',
    'as' =>'complete-order'

]);

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');




Route::group(['middleware'=>'AuthenticateMiddleware'],function(){
    
    
/*Category Info*/

Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@saveCategory')->name('save');
Route::get('/category/manage', 'CategoryController@manageCategory')->name('manage');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory')->name('update');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory')->name('delete');

/* manufacture info */
Route::get('/manufacture/add','manufactureController@addManufacture');
Route::post('/manufacture/save','manufactureController@saveManufacture');
Route::get('/manufacture/manage','manufactureController@manageManufacture');
Route::get('/manufacture/edit/{id}','manufactureController@editManufacture');
Route::post('/manufacture/update','manufactureController@updateManufacture')->name('update');
Route::get('/manufacture/delete/{id}','manufactureController@deleteManufacture');

/*product info */
Route::get('/product/add','productController@addProduct');
Route::post('/product/save','productController@saveProduct');
Route::get('/product/manage','productController@manageProduct');
Route::get('/product/edit/{id}','productController@editProduct');
Route::post('/product/update','productController@updateProduct')->name('update');
Route::get('/product/delete/{id}','productController@deleteProduct');
Route::get('/product/view/{id}','productController@viewProduct');

Route::get('/user/manage','UserController@manageUser');
});