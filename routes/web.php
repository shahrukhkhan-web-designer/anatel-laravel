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

Auth::routes();
Route::get('/','HomeController@index')->name('home');

//Route::get('/', function () {
//    return view('index');
//});
Route::get('about-us', 'HomeController@about');
Route::get('our-business', 'HomeController@business');
Route::get('careers', 'HomeController@careers');
Route::get('contact-us', 'HomeController@contact');
Route::get('careers', 'HomeController@careers');