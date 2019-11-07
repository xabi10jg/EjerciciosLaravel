<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Http\Requests\ContactoRequest;

class FormularioController extends Controller
{
    function mostrarvista(){
    	return view ('formulario');

    }
    function recogerdatos(Request $request){

    	$nombre=$request->input('nombre')." ".$request->input('apellido');
    	return view('saludoconnombre',['nombre'=>$nombre]);
    }
    function mostrarvista2(){
    	return view ('formulario2');

    }
    function recogerdatos2(Request $request){
    	$json =File::get(base_path('database/data/saludos.json'));
    	$idiomas= json_decode($json);
    	$nombre=$request->input('nombre')." ".$request->input('apellido');
    	return view('mostrardatos2',['nombre'=>$nombre, 'idiomas'=>$idiomas]);
    }
    function mostrarvistavalidada(){
    	return view ('formularioValidados');

    }
    function validardatos(ContactoRequest $request){

    		

    		return view ('mostrardatosvalidados')->with('nombre', $request->input('nombre'))->with('apellido', $request->input('apellido'))->with('email',$request->input('email'))->with('telefono', $request->input('telefono'));

    }
    function mostrarvistavalidada2(){
    	return view ('formularioValidados2');

    }
    
    
}
