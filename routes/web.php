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

Route::resource('/reporte_inmuebles', 'InmuebleController');
Route::get('/reporte_inmuebles/{id}/delete', 'InmuebleController@destroy');

Route::resource('/reporte_proveedores', 'ProveedorController');
Route::get('/reporte_proveedores/{id}/delete', 'ProveedorController@destroy');

Route::get('/reporte_inmuebles/{reporte_inmueble}/cobros/create', 'InmuebleCobroController@create');
Route::get('/reporte_inmuebles/{reporte_inmueble}/cobros/edit/cobro{id}', 'InmuebleCobroController@edit');
Route::put('/reporte_inmuebles/{reporte_inmueble}/cobros/{id}', 'InmuebleCobroController@update');
Route::post('/reporte_inmuebles/{reporte_inmueble}/cobros', 'InmuebleCobroController@store');

Route::get('/reporte_proveedores/{reporte_proveedor}/pagos/create', 'ProveedorPagoController@create');
Route::get('/reporte_proveedores/{reporte_proveedor}/pagos/edit/pago{id}', 'ProveedorPagoController@edit');
Route::put('/reporte_proveedores/{reporte_proveedor}/pagos/{id}', 'ProveedorPagoController@update');
Route::post('/reporte_proveedores/{reporte_proveedor}/pagos', 'ProveedorPagoController@store');
