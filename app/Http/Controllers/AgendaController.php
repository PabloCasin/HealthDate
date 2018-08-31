<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
class AgendaController extends Controller
{
    public static function agendaJSON(){
        $agenda = Agenda::selectRaw('agendas.id,facultativos_id,users_id,CONCAT(fechaCita,"T",horaEntrada) AS start,CONCAT(fechaCita,"T",horaSalida) AS end,CONCAT(facultativos.tratamiento," ",facultativos.nombre," ",facultativos.apellido," ",facultativos.segundoApellido) AS title')
                           ->join('facultativos','facultativos_id','facultativos.id')
                          ->get();
        //return $agenda->toJson();
        return response()->json($agenda);
    }
    
    public static function facultativo($id){
        $agenda = Agenda::selectRaw('agendas.id,facultativos_id,users_id,CONCAT(fechaCita,"T",horaEntrada) AS start,CONCAT(fechaCita,"T",horaSalida) AS end,CONCAT(users.nombre," ",users.apellido," ",users.segundoApellido) AS title')
                        ->join('users','users_id','users.id')
                        ->where('facultativos_id',$id)
                        ->get();
        //return $agenda->toJson();
        return response()->json($agenda);
    }
}
