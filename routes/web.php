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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',['as'=>'home','uses'=>'SiteController']);
Route::get('/directory/{slug}','Site\DirectoryController@show');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('directory','Admin\DirectoryController');
    Route::get('/',['as'=>'admin.dashboard','uses'=>'Admin\DashboardController']);
    Route::resource('fields','Admin\FieldsController');
});