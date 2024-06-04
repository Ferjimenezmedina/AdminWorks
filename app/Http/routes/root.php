<?php


Route::get('/admin/application',['as'=>'admin.home','uses'=> 'AdminController@index']);
Route::get('/admin/usuarios', ['as'=>'admin.usuarios', 'uses'=> 'AdminController@userControl']);
Route::get('/admin/usuariosA', ['as'=>'admin.usuarios', 'uses'=> 'AdminController@getIndex']);
Route::get('/company/users',['as'=>'company.list','uses'=> 'CompanyController@list']);
Route::get('/company/vacants',['as'=>'vacants.list','uses'=> 'VacanteController@list']);
Route::get('/admin/estados',['as'=>'estados.list','uses'=> 'LocalidadesController@list']);
Route::get('/admin/municipios',['as'=>'municipios.list','uses'=> 'LocalidadesController@listEstado']);
Route::get('/admin/categorias',['as'=>'categorias.list','uses'=> 'SubcategoryController@List']);
Route::get('/admin/subcategorias',['as'=>'subcategorias.list','uses'=> 'SubcategoryController@listSubcategory']);
Route::get('/pdf/aspirantes', ['as'=>'pdf.aspirantes','uses'=>'PdfController@reportes']);
Route::get('/pdf/empresas', ['as'=>'pdf.empresas','uses'=>'PdfController@reportesEmpresa']);
Route::delete('/leaflet/delete/{id}', ['as' => 'leaflet.delete','uses' => 'Company\LeafletController@delete']);

