<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function cursos_show(){
        $cursos=Curso::all();

        foreach($cursos as $curso){
            $curso->profesor();
        }
        return view('cursos.cursos_show',compact('cursos'));
    }
}
