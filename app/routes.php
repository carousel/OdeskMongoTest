<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "NetworkController@index");

Route::get('/create-form', "NetworkController@create_form");
Route::post('/save', "NetworkController@save");

Route::get('/edit-form', "NetworkController@edit_form");
Route::post('/edit', "NetworkController@edit");

Route::post('/delete', "NetworkController@destroy");
