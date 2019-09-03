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
    return view('home');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/imprint', 'HomeController@imprint')->name('imprint');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');


Route::middleware(['auth'])->group(function () {

    Route::post('suppliers', 'SuppliersController@store')->name('suppliers.store');
    Route::get('suppliers/create', 'SuppliersController@create')->name('suppliers.create');
    Route::delete('suppliers/{supplier}', 'SuppliersController@destroy')->name('suppliers.destroy');
    Route::put('suppliers/{supplier}', 'SuppliersController@update')->name('suppliers.update');
    Route::get('suppliers/{supplier}/edit', 'SuppliersController@edit')->name('suppliers.edit');


    Route::post('products', 'ProductsController@store')->name('products.store');
    Route::get('products/create', 'ProductsController@create')->name('products.create');
    Route::delete('products/{product}', 'ProductsController@destroy')->name('products.destroy');
    Route::put('products/{product}', 'ProductsController@update')->name('products.update');
    Route::get('products/{product}/edit', 'ProductsController@edit')->name('products.edit');


});

//Route::resource('suppliers', 'SuppliersController');
Route::get('suppliers', 'SuppliersController@index')->name('suppliers.index');
Route::get('suppliers/{supplier}', 'SuppliersController@show')->name('suppliers.show');

//Route::resource('products', 'ProductsController');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::get('/category/{tag}', [\App\Http\Controllers\ProductsController::class, 'tag'])->name('tag');

