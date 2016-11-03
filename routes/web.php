<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Http\Controllers\SiteController;

Route::get('/', ['uses' => 'SiteController@index', 'as' => 'site.index']);
Route::post('/', ['uses' => 'SiteController@sendContact', 'as' => 'site.send.contact']);

Auth::routes();
Route::get('/home', 'HomeController@index');
