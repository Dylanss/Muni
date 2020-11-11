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
Route::get('/admin/admin', 'Admin\MuniController@index')->name('admin.admin');
Route::get('/admin/admin/muni', 'Admin\MuniController@index')->name('admin.admin.muni');
Route::get('/admin/admin/evaluador', 'Admin\EvaluadoresController@evaluador')->name('admin.admin.evaluador');
Route::get('/admin/admin/asignacion', 'Admin\AsignacionController@asignacion')->name('admin.admin.asignacion');
Route::get('/admin/admin/registro', 'Admin\RegistroController@registro')->name('admin.admin.registro');
Route::get('/admin/admin/fetch', 'Admin\AdminController@fetch')->name('dynamicdependent.fetch');