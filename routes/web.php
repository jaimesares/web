<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', ['as' => 'index', 'uses' => 'WebController@index']);
Route::post('/contact', ['as' => 'contact', 'uses' => 'WebController@contact']);

