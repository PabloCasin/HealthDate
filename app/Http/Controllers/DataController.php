<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facultativo;
use App\Servicio;

class DataController extends Controller
{
    public static function numFacultativos(){
       echo Facultativo::count();
    }
    
    public static function serviciosActivos(){
        echo Servicio::all()->where('activo',1)->count();
    }
}
