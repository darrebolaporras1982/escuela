<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function show(){
        $alumnos=Alumno::all();
        return view('alumnos.alumnos_show',compact('alumnos'));
    }
    public function details($id){
        $alumno=Alumno::find($id);
        return view('alumnos.alumno_details',compact('alumno'));
    }
}
