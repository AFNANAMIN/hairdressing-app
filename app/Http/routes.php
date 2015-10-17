<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Pages routes...
Route::get('/',              ['as' => 'home',     'uses' => 'PagesController@home']);
Route::get('about',          ['as' => 'about',    'uses' => 'PagesController@about']);
Route::get('stylists',       ['as' => 'stylists', 'uses' => 'PagesController@stylists']);
Route::get('products',       ['as' => 'products', 'uses' => 'PagesController@products']);
Route::get('contact',        ['as' => 'contact',  'uses' => 'PagesController@contact']);
