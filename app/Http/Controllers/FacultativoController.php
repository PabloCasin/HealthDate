<?php

namespace App\Http\Controllers;

use App\Facultativo;
use Illuminate\Http\Request;

class FacultativoController extends Controller
{
    public function index(){
        $facultativos = Facultativo::all();
        return view('facultativos')->with('facultativos',$facultativos);
    }
    
    public function servicio(){
        return $this->belongsTo('App\Servicio');
    }
}
