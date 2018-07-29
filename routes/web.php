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

/* Public Routes */
// home page
Route::get('/', 'Publics\\HomeController@index');

// open one product
Route::get('{any}-{id}', 'Publics\\ProductsController@productPreview')->where('id', '[\d+]+')->where('any', '(.*)');

// open all products
Route::get('show-products', 'Publics\\ProductsController@index');

// open all products with categorie
Route::get('category/{category}', 'Publics\\ProductsController@index')->where('category', '(.*)');

// checkout please
Route::get('checkout', 'Publics\\CheckoutController@index');

// checkout post req
Route::post('checkout', 'Publics\\CheckoutController@setOrder');

// open contacts
Route::get('contacts', 'Publics\\ContactsController@index');

// send message from contacts
Route::post('contacts', 'Publics\\ContactsController@sendMessage');

Route::get('sitemap', 'Publics\\SitemapController@index');

// add product to cart from add button (ajax)
Route::post('addProduct', 'Publics\\CartController@addProduct');
// get products and cart html
Route::post('getGartProducts', 'Publics\\CartController@renderCartProductsWithHtml');
// get products and cart html
Route::post('removeProductQuantity', 'Publics\\CartController@removeProductQuantity');
// get products and cart html for checkout page
Route::post('getProductsForCheckoutPage', 'Publics\\CartController@getProductsForCheckoutPage');
// remove product from cart
Route::post('removeProduct', 'Publics\\CartController@removeProduct');



/* Administration Routes */
Route::middleware(['auth'])->group(function () { // check for autherization
    Route::get('admin', 'Admin\\OrdersController@index');
    Route::get('admin/users', 'Admin\\UsersController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('admin/users', 'Admin\\UsersController@setUser')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('admin/delete/user/{userId}', 'Admin\\UsersController@deleteUser')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('admin/orders', 'Admin\\OrdersController@index')->where('locale', implode('|', Config::get('app.locales')));
});
// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('logout', 'Admin\\UsersController@logout');

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);