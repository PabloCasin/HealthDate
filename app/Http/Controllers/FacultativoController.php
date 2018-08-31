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
    
    public function show($id){
        $facultativo = Facultativo::find($id);
        return view('facultativo')->with('facultativo',$facultativo);
    }
}
