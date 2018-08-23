<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
class ServicioController extends Controller
{
    //
    public static function index(){
     $servicios= Servicio::all();
     return view('servicios')->with('servicios',$servicios);
    }
    
    public static function show($id){
        $servicio= Servicio::find($id);
        return view('servicio')->with('servicio',$servicio);
    }
    
    public static function update(){
        
    }
    
}
