<?php

Route::group(['middleware' => 'iscvcomplete'], function (){

    Route::get('/curriculum/edit',['as'=>'curriculum.edit','uses'=>'CurriculumController@edit']);
    Route::get('/curriculum/show',['as'=>'curriculum.show','uses'=>'CurriculumController@show']);
    Route::put('/curriculum/update',['as'=>'curriculum.update','uses'=>'CurriculumController@update']);
    Route::get('/curriculum/pdf', ['as'=>'curriculum.pdf','uses'=>'PdfController@invoice']);
    Route::get('/aspirantes/postulaciones', ['as'=>'aspirantes.postulaciones','uses'=>'PostulationController@Aspirantelist']);

    Route::get('/curriculum/up',['as'=>'upcurriculum.create','uses'=>'Curriculums\UpCurriculumsController@create']);
    Route::post('/curriculum/up',['as'=>'upcurriculum.store','uses'=>'Curriculums\UpCurriculumsController@store']);
    Route::get('/aspirante/mispreferencias',['as'=>'preferences.edit','uses'=>'PreferencesController@edit']);
    Route::put('/aspirante/mispreferencias/update',['as'=>'preferences.update','uses'=>'PreferencesController@update']);
    Route::get('/aspirante/{id}/show',['as'=>'curriculum.aspi_show','uses'=>'CurriculumController@aspShow']);
    Route::get('/aspirante/postulaciones',['as'=>'adminuser.postu','uses'=>'AdminUserController@getPostu']);
    Route::post('/postulacion/submit',['as'=>'postulate.submit', 'uses'=>'PostulationController@submit']);
    Route::delete('/postulacion/{id}/delete',['as'=>'postulate.delete', 'uses'=>'PostulationController@destroy']);
    Route::get('/aspirantes/{id}/adminshow', ['as'=>'aspirantes.adminshow','uses'=>'VacanteController@adminshow3']);
    Route::get('/aspirantes/help', ['as'=>'aspirantes.help-miperfil','uses'=>'AdminUserController@helpmiperfil']);
    Route::get('/aspirantes/help2', ['as'=>'aspirantes.help-micurriculum','uses'=>'AdminUserController@helpmicurriculum']);


});

//RUTAS DE SERVICIOS
    Route::get('/aspirante/servicios/create',['as'=>'aspirantes.services.create','uses'=>'ServiciosController@create']);
    Route::get('/aspirante/servicios/admin',['as'=>'aspirantes.services.admin','uses'=>'ServiciosController@adminView']);
    Route::get('/b/servicios/{id}/show',['as'=>'services.show','uses'=>'ServiciosController@show2']);
      Route::get('/aspirante/servicios', ['as'=>'aspirantes.services.list','uses'=>'ServiciosController@list2']);

//AQUI TERMINAN LAS RUTAS DE SERVICIOS

Route::get('/aspirante/admin',['as'=>'adminuser.home','uses'=> 'AdminUserController@index']);
Route::get('/aspirante/change',['as'=>'index.change','uses'=>'IndexController@changeCuenta']);
Route::get('/curriculum/create',['as'=>'curriculum.create','uses'=>'CurriculumController@create']);
Route::post('/curriculum/store',['as'=>'curriculum.store','uses'=>'CurriculumController@store']);


///Ajax
Route::post('/academicDaExt/store', 'Curriculums\AcaDatExtController@store');
Route::delete('/academicDaExt/{id}/delete','Curriculums\AcaDatExtController@destroy');
Route::post('/idiomas/store', 'Curriculums\LanguagesController@store');
Route::delete('/idiomas/{id}/delete','Curriculums\LanguagesController@destroy');
Route::post('/asignacioncatego/store', 'Curriculums\AsigCategoController@store');
Route::delete('/asignacioncatego/{id}/delete','Curriculums\AsigCategoController@destroy');
Route::post('/ofimatica/store', 'Curriculums\OfimaticController@store');
Route::delete('/ofimatica/{id}/delete','Curriculums\OfimaticController@destroy');
Route::post('/software/store', 'Curriculums\SoftwareController@store');
Route::delete('/software/{id}/delete','Curriculums\SoftwareController@destroy');
Route::post('/ability/store', 'Curriculums\AbilityController@store');
Route::delete('/ability/{id}/delete','Curriculums\AbilityController@destroy');
Route::delete('/archive/{id}/delete','Curriculums\UpCurriculumsController@destroy');
Route::post('/experience/store', 'Curriculums\WorkExperienceController@store');
Route::delete('/experience/{id}/delete','Curriculums\WorkExperienceController@destroy');