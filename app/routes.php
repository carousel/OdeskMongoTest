<?php

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

//delete content from db
Route::post('/delete', "NetworkController@destroy");
