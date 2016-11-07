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
Route::get('/notifishow', ['uses' => 'HomeController@notificationsShow', 'as' => 'notifishow']);
Route::post('/notifishow', ['uses' => 'HomeController@events_read', 'as' => 'notifishow']);

Route::get('/works', ['uses' => 'WorksController@index', 'as' => 'works.index']);
Route::get('/works-get-work/{id}', ['uses' => 'WorksController@getWork', 'as' => 'works.get.work']);
Route::get('/works-create', ['uses' => 'WorksController@create', 'as' => 'works.create']);
Route::post('/works-create', ['uses' => 'WorksController@store', 'as' => 'works.store']);
Route::get('/works-edit/{id}', ['uses' => 'WorksController@edit', 'as' => 'works.edit']);
Route::post('/works-edit/{id}', ['uses' => 'WorksController@update', 'as' => 'works.update']);
Route::get('/works-destroy/{id}', ['uses' => 'WorksController@destroy', 'as' => 'works.destroy']);

Auth::routes();
Route::get('/home', 'HomeController@index');
