<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/muni', function () {
    return view('admin/muni/index');
});

Route::get('/admin/evaluador', function () {
    return view('admin/evaluador');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/load', 'Admin\MuniController');
/* Route::get('/departannto', 'Admin\MuniController'); */
Route::resource('/evaluador', 'Admin\EvaluadoresController');
Route::resource('/registros', 'Admin\RegistroController');
Route::resource('/asignacion', 'Admin\AsignacionController');
Route::get('/admin/asignacion', 'Admin\AsignacionController@asignacion')->name('admin.asignacion');
Route::get('/admin/registro', 'Admin\RegistroController@registro')->name('admin.registro');
Route::get('/admin/fetch', 'Admin\MuniController@fetch')->name('dynamicdependent.fetch');

