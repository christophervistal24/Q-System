<?php

Route::get('/service',['uses'=>'EnrollController@index']);
Route::post('/service',['uses'=>'EnrollController@store']);

Route::get('/list',['uses'=>'EnrollListController@index']);
Route::get('/list/{current_no}',['uses'=>'EnrollListController@retrievenext']);
