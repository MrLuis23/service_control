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

Route::get('pruebaRoles', function(){
	$rol = Role::where('rol','user')->get();
	dd($rol);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
