<?php

Route::get('/',['as'=>'frontend.index','uses'=>'IndexController@index']);
Route::get('preguntas/aspirante',['as'=>'frontend.preguntas','uses'=>'IndexController@preguntasUser']);
Route::get('/company', ['as'=>'frontend.company.anuncios','uses'=>'IndexController@anunciosCompany']);
Route::get('/aspirantes-ayuda', ['as'=>'frontend.help','uses'=>'IndexController@help1']);
Route::get('/company-ayuda', ['as'=>'frontend.help-company','uses'=>'IndexController@help2']);
Route::get('/servicios-ayuda', ['as'=>'frontend.help-servicios','uses'=>'IndexController@help3']);
//Route::group(['middleware' => 'company'], function (){
    Route::get('/busqueda/vacante', ['as'=>'vacante.index','uses'=>'VacanteController@index']);
    Route::get('/mapa/gmaps', ['as'=>'auth.gmaps','uses'=>'MapController@index']);
    Route::get('/vacante/{id}/show', ['as'=>'vacante.show','uses'=>'VacanteController@show']);
//});
    Route::post('/servicios/store',['as'=>'services.store','uses'=>'ServiciosController@store']);



//Ajax
Route::get('/estados/{id}','LocalidadesController@SelectState');
Route::get('/municipios/{id}','LocalidadesController@SelectMunicipio');
Route::get('/subcategoria/{id}','SubcategoryController@SelectSubcategory');