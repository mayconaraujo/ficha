<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'Home@index')->name('home');
// cadastrar ficha empresa
Route::get('/ficha/criar', 'Empresa@getSave');
Route::get('/ficha/editar/{id}', 'Empresa@getEdit');
Route::post('/ficha/criar', 'Empresa@postSave');
Route::post('/ficha/editar/{id}', 'Empresa@postEditar')->name('editar.empresa');
Route::get('/ficha/apagar/{id}', 'Empresa@apagar')->name('apagar.empresa');

Route::get('/endentrega/editar/{id}', 'EnderecoEntrega@getEdit');
Route::post('/endentrega/editar/{id}', 'EnderecoEntrega@postEditar')->name('editar.endentrega');
Route::get('/endentrega/apagar/{id}', 'EnderecoEntrega@apagar')->name('apagar.endentrega');

Route::get('/endcobra/editar/{id}', 'EnderecoCobranca@getEdit');
Route::post('/endcobra/editar/{id}', 'EnderecoCobranca@postEditar')->name('editar.empresa');
Route::get('/endcobra/apagar/{id}', 'EnderecoCobranca@apagar')->name('apagar.empresa');

Route::get('/refcom/editar/{id}', 'ReferenciaComercias@getEdit');
Route::post('/refcom/editar/{id}', 'ReferenciaComercias@postEditar')->name('editar.empresa');
Route::get('/refcom/apagar/{id}', 'ReferenciaComercias@apagar')->name('apagar.empresa');

Route::get('/vendedor/editar/{id}', 'Vendedor@getEdit');
Route::post('/vendedor/editar/{id}', 'Vendedor@postEditar')->name('editar.empresa');
Route::get('/vendedor/apagar/{id}', 'Vendedor@apagar')->name('apagar.empresa');

Route::get('/gravar-compras', 'GravarCompras@index')->name('get.compras');
Route::get('/gravar-compras/granvar', 'GravarCompras@getGravar');
Route::post('/gravar-compras/gravar', 'GravarCompras@postGravar')->name('gravar.postcompras');
Route::get('/gravar-compras/editar/{id}', 'GravarCompras@getPutGravar');
Route::post('/gravar-compras/editar/{id}', 'GravarCompras@postPutGravar');
Route::get('/gravar-compras/apagar/{id}', 'GravarCompras@apagar');

Route::get('/relatorios', 'Report@index');
Route::get('/relatorios/save/{id}', 'Report@saveReport');
Route::get('/relatorios/print/{id}', 'Report@printReport');
