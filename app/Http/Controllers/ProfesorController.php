<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function profesor_show(){
    $profesores = Profesor::all();// los profesores con sus cursos
    foreach($profesores as $profesor){
        $profesor->curso();
    }
    return view('profesores.profesores_show',compact('profesores'));// Puedes devolver los datos a una vista o de la forma que prefieras
    }
}
