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
Route::get('/',                  ['as' => 'home',     'uses' => 'PagesController@home']);
Route::get('about',              ['as' => 'about',    'uses' => 'PagesController@about']);
Route::get('stylists',           ['as' => 'stylists', 'uses' => 'PagesController@stylists']);
Route::get('products',           ['as' => 'products', 'uses' => 'PagesController@products']);
Route::get('contact',            ['as' => 'contact',  'uses' => 'PagesController@contact']);
Route::get('panel',              ['as' => 'panel',    'uses' => 'PagesController@panel']);
Route::get('sitemap',            ['as' => 'sitemap',  'uses' => 'PagesController@sitemap']);

// Mailing Routes
Route::post('mail',              ['as' => 'mail',     'uses' => 'MailController@mail']);

// Authentication routes...
Route::get('auth/login',         ['as' => 'auth.login',      'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login',        ['as' => 'auth.accept',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',        ['as' => 'auth.logout',     'uses' => 'Auth\AuthController@getLogout']);

// Password reset link request routes...
Route::get('password/email',     ['as' => 'password.email',  'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email',    ['as' => 'password.send',   'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}',    ['as' => 'password.reset',  'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset',           ['as' => 'password.accept', 'uses' => 'Auth\PasswordController@postReset']);

// Stylist resource routes...
Route::resource('stylists', 'StylistsController', [ 'only' => ['create', 'store', 'update', 'edit', 'destroy'] ]);

// Product resource routes...
Route::post('products.featured', ['as' => 'products.featured',     'uses' => 'ProductsController@featured']);
Route::resource('products', 'ProductsController', [ 'only' => ['create', 'store', 'update', 'edit', 'destroy'] ]);

// Hours resource routes...
Route::resource('hours', 'HoursController', [ 'only' => ['create', 'store', 'update', 'edit', 'destroy'] ]);