<?php

// Authentication routes...// paul michel // croock
Route::get('login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('login',['as'=>'auth.login','uses'=>'Auth\AuthController@postLogin']);



// Registration routes...
Route::get('registro/candidate',['as'=>'auth.register','uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register',['as'=>'auth.register-data','uses'=>'Auth\AuthController@postRegister']);
Route::post('auth/register',['as'=>'auth.register-data','uses'=>'Auth\AuthController@postRegisterPersonal']);
Route::post('auth/registerPersonal',['as'=>'auth.register-data','uses'=>'Auth\AuthController@postRegisterPersonal']);
Route::get('auth/register-Personal',['as'=>'auth.register-personal','uses'=>'Auth\AuthController@postRegisterPersonal']);
Route::get('registro/company', ['as'=>'auth.register_com','uses'=>'Auth\AuthController@getRegisterCom']);
Route::post('registro/company',['as'=>'auth.register-data-com','uses'=>'Auth\AuthController@postRegisterCom']);


Route::get('confirmation/{token}',['as'=>'confirmation','uses'=>'Auth\AuthController@getConfirmation']);
// Password reset link request routes...
Route::get('reset/password', ['as'=>'password.getcuenta','uses'=>'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as'=>'password.email','uses'=>'Auth\PasswordController@postEmail']);
// Password reset routes...
Route::get('password/reset/{token}',['as'=>'auth.reset','uses'=>'Auth\PasswordController@getReset']);
Route::post('password/reset',['as'=>'auth.reset','uses'=>'Auth\PasswordController@postReset']);


Route::get('pdf', ['as'=>'pdf.prueba','uses'=>'PdfController@prueba']);