<?php

use App\Http\Controllers\FacultativoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
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

Route::resource('/facultativos','FacultativoController');
Route::resource('/servicios','ServicioController');
//Route::resource('/usuarios','UserController');
Route::get('/borraUsuario','UserController@destroy')->name('user.delete');
Route::get('/usuarios','UserController@index');


Route::get('/escritorio',function (){
    return view('dashboard');
});

Route::get('/calendario',function (){
    return view('calendarios');
});
Route::get('/agenda','AgendaController@agendaJSON');
Route::get('/agenda/{id}','AgendaController@facultativo');
