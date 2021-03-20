<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriasController extends Controller
{
    //index
    public function index(){
    	
    	//Materia es del modelo
    	//$materia = Materia::all(); llamar a todos los datos de la tabla
    	$materia= Materia::where('state', '1')->paginate(2);
    	//add($materia);

    	return view('admin/index')->with('materia', $materia);

    }
}
