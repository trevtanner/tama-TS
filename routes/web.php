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

//Uncommit when pushing live site with products, remove from auth middleware as well

/*Route::get('/home', 'HomeController@index')->name('home');
Route::get('/imprint', 'HomeController@imprint')->name('imprint');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/privacy-policy', 'HomeController@privacy')->name('privacy');*/


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



//Delete this section after pushing live site

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/imprint', 'HomeController@imprint')->name('imprint');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/privacy-policy', 'HomeController@privacy')->name('privacy');


    //Route::resource('suppliers', 'SuppliersController');
    Route::get('suppliers', 'SuppliersController@index')->name('suppliers.index');

    //Route::resource('products', 'ProductsController');
    Route::get('products', 'ProductsController@index')->name('products.index');
    Route::get('products.search', 'ProductsController@search')->name('search');
    Route::get('products/{product}', 'ProductsController@show')->name('products.show');

    Route::get('tts/ma/{supplier}', [\App\Http\Controllers\ProductsController::class, 'supplier'])->name('supplier');
    Route::get('/tts/tg/{tag}', [\App\Http\Controllers\ProductsController::class, 'tag'])->name('tag');
    Route::get('/tts/sc/{subcategory}', [\App\Http\Controllers\ProductsController::class, 'subcategory'])->name('subcategory');
});

//Un Comment when pushing live site
/*//Route::resource('suppliers', 'SuppliersController');
Route::get('suppliers', 'SuppliersController@index')->name('suppliers.index');

//Route::resource('products', 'ProductsController');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products.search', 'ProductsController@search')->name('search');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::get('tts/ma/{supplier}', [\App\Http\Controllers\ProductsController::class, 'supplier'])->name('supplier');
Route::get('/tts/tg/{tag}', [\App\Http\Controllers\ProductsController::class, 'tag'])->name('tag');
Route::get('/tts/sc/{subcategory}', [\App\Http\Controllers\ProductsController::class, 'subcategory'])->name('subcategory');*/

