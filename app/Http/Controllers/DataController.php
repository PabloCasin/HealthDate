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
        echo Servicio::where('activo',1)->count();
    }
    
    public static function numPacientes(){
        echo User::where('rol','paciente')->count();
    }
    
    public static function proximasCitas(){
       
        $citas = Agenda::where('fechaCita',date('Y-m-d'))
             ->orderBy('horaEntrada','asc')
             ->join('facultativos','facultativos_id','facultativos.id')
             ->get();
        return $citas;
    }
}
