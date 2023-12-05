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
    public function createform(){//para ir al formulario de crear alummo
        return view('alumnos.alumno_createform');
    }
    public function create(Request $request){
        $alumno=new Alumno();
        $alumno->nom_ape=$request->nombreApellidos;
        $alumno->edad=$request->edad;
        $alumno->direccion=$request->direccion;
        $alumno->telefono=$request->telefono;
        $alumno->save();
         // Redirige a la página principal después de guardar el alumno con un mensaje de éxito
        return redirect()->route('alumnos.show')->with('success', 'Alumno creado exitosamente');
    ;
    }
}
