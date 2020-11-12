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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/muni', 'Admin\MuniController');

//Route::get('/admin/muni', 'Admin\MuniController@index')->name('admin.muni.index');


Route::get('/admin/evaluador', 'Admin\EvaluadoresController@evaluador')->name('admin.evaluador');
Route::get('/admin/asignacion', 'Admin\AsignacionController@asignacion')->name('admin.asignacion');
Route::get('/admin/registro', 'Admin\RegistroController@registro')->name('admin.registro');
Route::get('/admin/fetch', 'Admin\MuniController@fetch')->name('dynamicdependent.fetch');