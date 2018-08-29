<?php

use App\Http\Controllers\FacultativoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\DataController;
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

Route::get('/facultativos','FacultativoController@index');
Route::resource('/servicios','ServicioController');
Route::get('/escritorio',function (){
    return view('dashboard');
});

Route::get('/calendarios',function (){
    return view('calendarios');
});
Route::get('/agenda','DataController@agendaJSON');