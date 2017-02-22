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
