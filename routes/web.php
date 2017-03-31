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
//
Route::get('/',function () {
    return view('welcome');

});

Route::get('/about', [
    'uses' => 'AppController@getAbout',
    'as' => 'about'
]);

Route::get('/works', [
    'uses' => 'AppController@getWorks',
    'as' => 'works'
]);

Route::get('/contact', [
    'uses' => 'AppController@getContact',
    'as' => 'contact'
]);

Route::get('/welcome', [
    'uses' => 'AppController@getWelcome',
    'as' => 'welcome'
]);

Route::get('/projectLaravel', [
    'uses' => 'AppController@getProjectLaravel',
    'as' => 'laravelProject'
]);