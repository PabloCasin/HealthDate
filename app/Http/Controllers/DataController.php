<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facultativo;
use App\Servicio;
use App\User;
use App\Agenda;

class DataController extends Controller
{
    public static function numFacultativos(){
       echo Facultativo::count();
    }
    
    public static function serviciosActivos(){
        echo Servicio::all()->where('activo',1)->count();
    }
    
    public static function numPacientes(){
        echo User::where('rol','paciente')->count();
    }
    
    public static function agendaJSON(){
        $agenda = Agenda::get();
        //return $agenda->toJson();
        return response()->json($agenda);
    }
}
