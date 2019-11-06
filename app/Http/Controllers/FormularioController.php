<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    function mostrarvista(){
    	return view ('formulario');

    }
    function recogerdatos(Request $request){

    	$nombre=$request->input('nombre')." ".$request->input('apellido');
    	return view('saludoconnombre',['nombre'=>$nombre]);
    }
}
