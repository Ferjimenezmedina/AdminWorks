<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|puede ser post,get , put, delete
*/


//Website
require __DIR__ . '/routes/website.php';

//Guest
Route::group(['middleware'=>'guest'], function(){
    require __DIR__ . '/routes/guest.php';
});

// Auth
require __DIR__ . '/routes/auth.php';
Route::group(['middleware'=>'auth'],function(){

    Route::group(['middleware' => 'company'], function (){
        //Candidate
        require __DIR__ . '/routes/candidate.php';
    });
    //Company
    require __DIR__ . '/routes/company.php';

    //Root
    require __DIR__ . '/routes/root.php';
});







