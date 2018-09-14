<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    
    public function index(){
        $usuarios = User::paginate(50);
        return view('users')->with('users',$usuarios);
    }
    
    public function destroy(Request $request)
    {   //For Deleting Users
        User::find($request->input('id'))->delete();
        
    }
}
