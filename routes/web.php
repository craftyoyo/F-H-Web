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

Route::get('/', 'ContentController@home');
Route::get('/home', 'ContentController@home');

Route::get('/web', 'ContentController@web');
//Route::get('/vpn', 'ContentController@vpn');
Route::get('/faq', 'ContentController@faq');
Route::get('/cgu', 'ContentController@cgu');
//Route::get('/about', 'ContentController@about');
Route::get('/contact', 'ContentController@contact');
Route::get('/sysadmin', 'ContentController@sysadmin');
