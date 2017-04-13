<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'directories'], function () {
    Route::get('/', function () {
        dd('This is the Directories module index page. Build something great!');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('directories','DirectoriesController');
    Route::resource('categories','CategoriesController');

    Route::resource('fields','FieldsController');
    Route::delete('/fields/{field_id}/{dir_id}',['as' => 'fields.destroy', 'uses' => 'FieldsController@destroy']);
    Route::get('/fields/create/{directory}',['as' => 'fields.add', 'uses' => 'FieldsController@create']);
    Route::post('/fields/add/{directory}',['as' => 'fields.submit', 'uses' => 'FieldsController@store']);
    Route::post('/fields/{directory}',['as' => 'fields.submit', 'uses' => 'FieldsController@store']);

    //Articles Routes
    Route::get('/articles',['as' => 'articles.index', 'uses' => 'AdminArticleController@index']);
    Route::get('/articles/create',['as' => 'articles.create', 'uses' => 'AdminArticleController@create']);
    Route::get('/articles/edit',['as' => 'articles.edit', 'uses' => 'AdminArticleController@edit']);
    Route::get('/articles/delete',['as' => 'articles.destroy', 'uses' => 'AdminArticleController@destroy']);







});


Breadcrumbs::register('admin.dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('admin.dashboard'));
});

Breadcrumbs::register('admin.directories', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Setup Directories', route('directories.index'));
});



Breadcrumbs::register('admin.directories.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.directories');
    $breadcrumbs->push('Manage Directories', route('directories.index'));
});


Breadcrumbs::register('admin.articles', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Setup Articles', route('articles.index'));
});

Breadcrumbs::register('admin.articles.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Manage Articles', route('articles.index'));
});
