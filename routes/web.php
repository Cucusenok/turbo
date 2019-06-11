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


Route::post('/getModel','AjaxController@model');

Route::post('/getmarkAndModel','AjaxController@index');

Route::post('/getTurbo','AjaxController@turbo');

Route::get('/',  'HomeController@index');

Route::get('about',  'AboutController@index');

Route::get('cars',  'CarsController@index');
Route::get('cars/search',  'CarSearchController@index');
