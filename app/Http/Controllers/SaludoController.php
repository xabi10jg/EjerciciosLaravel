<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function Saludo(){
    	return view('saludo');
    }
    function SaludoConNombre($nombre){
    	return view('saludoconnombre',['nombre'=>$nombre]);
    }
    function SaludoConNombreYColor($nombre, $color='32a8a4'){
    	return view('saludoconnombreycolor',['nombre'=>$nombre, 'color'=>$color]);
    }
}
