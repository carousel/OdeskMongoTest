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

//main resource route
Route::get('/', "NetworkController@index");

//returnes form for creating new content
Route::get('/create-form', "NetworkController@create_form");
//saving new content
Route::post('/save', "NetworkController@save");

//returnes form for editing new content
Route::get('/edit-form', "NetworkController@edit_form");
//save edited content
Route::post('/edit', "NetworkController@edit");

//delete content form db
Route::post('/delete', "NetworkController@destroy");
