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
        return redirect()->route('alumnos.show')->with('creado', 'Alumno creado exitosamente');
    }
    public function confirm($id){
        $alumno=Alumno::find($id);
        return view('alumnos.alumno_confirm_delete',compact('alumno'));
    }
    public function delete($id){
        $alumno=Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos.show')->with('eliminado', 'Alumno eliminado exitosamente');
    }
    public function editform($id){
        $alumno=Alumno::find($id);
        return view('alumnos.alumnos_edit',compact('alumno'));
    }
    public function edit(Request $formulario, Alumno $alumno){
        $alumno->nom_ape=$formulario->nombreApellidos;
        $alumno->edad=$formulario->edad;
        $alumno->direccion=$formulario->direccion;
        $alumno->telefono=$formulario->telefono;
        $alumno->save();
        return redirect()->route('alumnos.show')->with('modificado', 'Alumno modificado exitosamente');


    }
}
