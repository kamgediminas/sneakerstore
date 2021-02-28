<?php

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


// www.mysite.com/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/cart', function (){
    return view('cart');
});

Route::get('/sneakers', 'SneakerController@index');
Route::get('/sneakers_price_asc', 'SneakerController@index_price_asc');
Route::get('/sneakers_ordered/{parameter}/{order}', 'SneakerController@index_ordered');
Route::get('/sneakers_price_desc', 'SneakerController@index_price_desc');
Route::get('/sneakers_date_asc', 'SneakerController@index_date_asc');
Route::get('/sneakers_admin', 'SneakerController@index_admin')->middleware('auth');
Route::get('/sneakers/create', 'SneakerController@create')->middleware('auth');
Route::post('/sneakers', 'SneakerController@store');
Route::get('/sneakers/{id}', 'SneakerController@show');
Route::delete('/sneakers/{id}', 'SneakerController@destroy')->middleware('auth');

Auth::routes([
    // disables registration
    //'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
