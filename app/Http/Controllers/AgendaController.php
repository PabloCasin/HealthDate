<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
class AgendaController extends Controller
{
    public static function agendaJSON(){
        $agenda = Agenda::get();
        //return $agenda->toJson();
        return response()->json($agenda);
    }
    
    public static function facultativo($id){
        $agenda = Agenda::where('facultativos_id',$id)->get();
        //return $agenda->toJson();
        return response()->json($agenda);
    }
}
