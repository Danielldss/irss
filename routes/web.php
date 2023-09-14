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
Route::get('/', 'SiteController@index');
Route::get('/home', 'SiteController@index');

Route::get('/servicos', 'SiteController@services');
Route::get('/empresa', 'SiteController@about');
Route::get('/como-funciona', 'SiteController@comoFunciona');
Route::get('/contato', 'SiteController@contact');
Route::post('/contato', 'SiteController@contact');
