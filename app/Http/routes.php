<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/test','TestController@hello');

// tao bang
Route::get('/model/admin', function () {
    App\Category::create(array(
        'CateName' => 'Ao'
    ));
});

Route::get('delete', function () {
    $filename=[];
    $filename[] = public_path().'/upload/images/005.jpg';
    $filename[] = public_path().'/upload/images/cosplay.jpg';

    foreach ($filename as $row){

        if (File::exists($row)) {
            File::delete($row);
        }

    }
});


// khai bao controller admin
Route::group(['prefix' => 'admin'], function () {
    Route::resource('product', 'Admin\ProductController');
    Route::get('product/edit/{slug}/{id}', ['as' => 'admin1.product.edit', 'uses' => 'Admin\ProductController@edit']);

    Route::resource('category', 'Admin\CategoryController');
    Route::get('category/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Admin\CategoryController@edit']);
    Route::get('category/destroy/{id}', ['as' => 'admin.category.destroy', 'uses' => 'Admin\CategoryController@destroy']);

    Route::resource('brand', 'Admin\BrandController');
    Route::get('brand/edit/{id}', ['as' => 'admin.brand.edit', 'uses' => 'Admin\BrandController@edit']);
    Route::get('brand/destroy/{id}', ['as' => 'admin.brand.destroy', 'uses' => 'Admin\BrandController@destroy']);

    Route::resource('color', 'Admin\ColorController');
    Route::get('color/edit/{id}', ['as' => 'admin.color.edit', 'uses' => 'Admin\ColorController@edit']);
    Route::get('color/destroy/{id}', ['as' => 'admin.color.destroy', 'uses' => 'Admin\ColorController@destroy']);

    Route::resource('size', 'Admin\SizeController');
    Route::get('size/edit/{id}', ['as' => 'admin.size.edit', 'uses' => 'Admin\SizeController@edit']);
    Route::get('size/destroy/{id}', ['as' => 'admin.size.destroy', 'uses' => 'Admin\SizeController@destroy']);

    Route::resource('oder', 'Admin\OderController');

});
Route::get('/',['as' => 'frontend.header', 'uses' => 'HomeController@index']);
    Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@login']);
    Route::post('login', ['as' => 'postlogin', 'uses' => 'Auth\AuthController@postlogin']);

    Route::get('register', ['as' => 'acc', 'uses' => 'Auth\AuthController@index']);
    Route::post('register', ['as' => 'register', 'uses' => 'Auth\AuthController@create']);

    Route::get('/product/{cate}/{slug}',['as' => 'frontend.pages.product', 'uses' => 'HomeController@single']);

    Route::get('/category/{slug}',['as' => 'cate', 'uses' => 'HomeController@category']);
    Route::get('/cart/add/{slug}',['as' => 'add.cart.item', 'uses' => 'CartController@bag']);
    Route::get('/cart/delete/{slug}',['as' => 'delete.cart.item', 'uses' => 'CartController@delete']);
    Route::get('/cart',['as' => 'cart', 'uses' => 'CartController@index']);

    Route::get('/checkout', ['as' => 'checkout', 'uses' => 'CheckoutController@checkout1']);

    Route::post('/checkout/add', ['as' => 'address', 'uses' => 'CheckoutController@address']);

Route::group(['prefix' => 'api'], function(){
   Route::get('/cart-items', 'CartController@getcartitems');
    Route::get('/product/{id}', 'CartController@getproduct');
    Route::get('/{id}',['as' => 'home1', 'uses' => 'HomeController@getdata']);

});


Route::get('/ajax/get', function () {
    // pass back some data
    $data   = array('value' => 'some data');
    // return a JSON response
    return  Response::json($data);
});
// this is your POST AJAX route
Route::post('/ajax/post', function () {
    // pass back some data, along with the original data, just to prove it was received
    $data   = array('value' => 'some data', 'input' => Request::input());
    // return a JSON response
    return  Response::json($data);
});

Route::get('delete', function () {
    Session::flush();
    return redirect('/');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('home', function () {
   if (Auth::guest()) {
       return redirect('auth/login');
   } else {
       echo 'User page';
   }
});