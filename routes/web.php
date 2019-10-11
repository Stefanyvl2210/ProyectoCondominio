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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Inmuebles
Route::get('/inmuebles', 'InmuebleController@index')->name('inmueble.index');
Route::get('/inmuebles/create', 'InmuebleController@create')->name('inmueble.create');
Route::post('/inmuebles/store', 'InmuebleController@store')->name('inmueble.store');
Route::get('/inmuebles/{inmueble}/edit', 'InmuebleController@edit')->name('inmueble.edit');
Route::put('/inmuebles/{id}', 'InmuebleController@update')->name('inmueble.update');
Route::delete('/inmuebles/{inmueble}', 'InmuebleController@destroy')->name('inmueble.delete');


//Cobros
Route::get('/inmuebles/{inmueble}/cobros/{mes?}', 'CobroController@index')->name('cobros.index');
Route::get('/inmuebles/{inmueble}/cobro/{cobro}/edit', 'CobroController@edit')->name('cobros.edit');
Route::put('/inmuebles/{inmueble}/cobro/{cobro}', 'CobroController@update')->name('cobros.update');
Route::get('/inmuebles/{inmueble}/cobro/create', 'CobroController@create')->name('cobros.create');
Route::post('/inmuebles/{id}/cobro/store', 'CobroController@store')->name('cobros.store');



Route::resource('/reporte_proveedores', 'ProveedorController');
Route::get('/reporte_proveedores/{id}/delete', 'ProveedorController@destroy');

Route::get('/reporte_inmuebles/{reporte_inmueble}/cobros/create', 'InmuebleCobroController@create');
Route::get('/reporte_inmuebles/{reporte_inmueble}/cobros/edit/cobro/{id}', 'InmuebleCobroController@edit');
Route::put('/reporte_inmuebles/{reporte_inmueble}/cobros/{id}', 'InmuebleCobroController@update');
Route::post('/reporte_inmuebles/{reporte_inmueble}/cobros', 'InmuebleCobroController@store');

Route::get('/reporte_proveedores/{reporte_proveedor}/pagos/create', 'ProveedorPagoController@create');
Route::get('/reporte_proveedores/{reporte_proveedor}/pagos/edit/pago{id}', 'ProveedorPagoController@edit');
Route::put('/reporte_proveedores/{reporte_proveedor}/pagos/{id}', 'ProveedorPagoController@update');
Route::post('/reporte_proveedores/{reporte_proveedor}/pagos', 'ProveedorPagoController@store');
