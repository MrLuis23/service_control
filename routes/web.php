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
use service_control\Role;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('services/delete/{service}', 'ServicesController@destroy')->name('services.borrar');
Route::post('services/{service}/update', 'ServicesController@update')->name('services.actualizar');
Route::resource('services', 'ServicesController');

Route::get('pruebaRoles', function(){
	$rol = Role::where('rol','user')->get();
	dd($rol);
});
