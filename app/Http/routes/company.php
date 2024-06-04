<?php

Route::group(['middleware'=> 'iscompanyfull'], function(){

    Route::get('/company/{id}/edit', ['as'=>'company.edit','uses'=>'CompanyController@edit']);
    Route::put('/company/{id}', ['as'=>'company.update','uses'=>'CompanyController@update']);
    Route::get('/vacante/create', ['as'=>'vacante.create','uses'=>'VacanteController@create']);
    Route::post('/vacante/create', ['as'=>'vacante.store','uses'=>'VacanteController@store']);

    Route::get('/vacante/admin', ['as'=>'vacante.admin','uses'=>'VacanteController@admin']);
    Route::get('/vacante/{id}/adminshow', ['as'=>'vacante.adminshow','uses'=>'VacanteController@adminshow']);
    Route::get('/company/prospect', ['as'=>'prospect.index','uses'=>'Company\LeafletController@index']);
    Route::get('/company/prospect/{id}/show', ['as'=>'prospect.show_ajax','uses'=>'ProspectController@showAjax']);
    Route::get('/company/home', ['as'=>'company.home','uses'=>'VacanteController@admin']);
    Route::get('/aspirante/{id}/show',['as'=>'curriculum.aspi_show','uses'=>'CurriculumController@aspShow']);
    
    Route::get('/vacante/create/{id}/contract', ['as'=>'vacante.store_contract','uses'=>'VacanteController@contract']);
    Route::post('/vacante/create/{id}/contract', ['as'=>'vacante.store_contract_put','uses'=>'VacanteController@contractPut']);
    Route::get('/vacante/create/{id}/demands', ['as'=>'vacante.store_demands','uses'=>'VacanteController@demands']);
    Route::post('/vacante/create/{id}/demands', ['as'=>'vacante.store_demands_put','uses'=>'VacanteController@demandsPut']);
    Route::get('/vacante/create/{id}/end', ['as'=>'vacante.store_final','uses'=>'VacanteController@storeFinal']);
    Route::put('/vacante/create/{id}/end', ['as'=>'vacante.store_final_put','uses'=>'VacanteController@storeFinalPut']);
    Route::get('/cv/pdf/{id}', ['as'=>'cv.pdf','uses'=>'PdfController@invoicecomp']);
    Route::get('/pdf/vacantespostuladas', ['as'=>'pdf.vacantespostuladas','uses'=>'PdfController@reportesVacantes']);
    Route::get('/company/servicios/create',['as'=>'company.services.create','uses'=>'ServiciosController@create']);
    Route::get('/company/servicios-c', ['as'=>'company.services.list','uses'=>'ServiciosController@list3']);
  Route::get('/b/servicios/{id}/show',['as'=>'services.show','uses'=>'ServiciosController@show']);
  Route::delete('/servicios/{id}/delete',['as'=>'services.delete','uses'=>'ServiciosController@destroy']);

  Route::get('/company/servicios/admin',['as'=>'company.services.admin','uses'=>'ServiciosController@index']);
  Route::get('/company/vacante/{id}/eliminar', ['as'=>'vacante.delete','uses'=>
    'VacanteController@destroy']);
 Route::get('/company/vacante/{id}/activate', ['as'=>'vacante.activate','uses'=>
    'VacanteController@reactivate']);
Route::get('/company/vacante/{id}/desactivar', ['as'=>'vacante.desactivar','uses'=>
    'VacanteController@deactivate']);

});

Route::group(['middleware'=> 'companyfull'], function(){
    Route::get('/company/create', ['as'=>'company.create','uses'=>'CompanyController@create']);
    Route::post('/company/store', ['as'=>'company.store','uses'=>'CompanyController@store']);
});


Route::get('/company/admin', ['as'=>'company.index','uses'=>'CompanyController@index']);
Route::get('/company/account', ['as'=>'company.edit_cuenta','uses'=>'CompanyController@editCuenta']);
Route::put('/company/account/{id}', ['as'=>'company.update-account','uses'=>'CompanyController@updateCuenta']);

Route::get('/vacante/{id}/edit', ['as'=>'vacante.edit','uses'=>'VacanteController@edit']);
Route::put('/vacante/{id}', ['as'=>'vacante.update','uses'=>'VacanteController@update']);
Route::get('/company/vacante/{id}/pustulados', ['as'=>'vacante.listaspvacant','uses'=>
    'VacanteController@listAspVacant']);
Route::get('/company/busqueda', ['as'=>'content.busca-prospectos','uses'=>'ProspectController@list']);



Route::post('/leaflet/submit/{id_user}', ['as' => 'leaflet.submit','uses' => 'Company\LeafletController@store']);
Route::delete('/leaflet/destroy/{id}', ['as' => 'leaflet.destroy','uses' => 'Company\LeafletController@destroy']);
Route::delete('/leaflet/delete/{id}', ['as' => 'leaflet.delete','uses' => 'Company\LeafletController@delete']);

///Ajax

Route::put('/vacant/{id}/deactivate',['as'=>'vacante.deactivate','uses'=>'VacanteController@deactivate']);
Route::put('/vacant/{id}/reactivate',['as'=>'vacante.reactivate','uses'=>'VacanteController@reactivate']);
Route::post('/demands/{id}/store', 'Company\DemandController@store');
Route::delete('/demands/{id}/delete','Company\DemandController@destroy');
Route::post('/benefits/{id}/store', 'Company\BenefitController@store');
Route::delete('/benefits/{id}/delete','Company\BenefitController@destroy');
Route::post('/idiomas-vacante/{id}/store', 'Company\LanguajesVacantController@store');
Route::delete('/idiomas-vacante/{id}/delete','Company\LanguajesVacantController@destroy');
