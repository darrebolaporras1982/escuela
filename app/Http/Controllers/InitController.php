<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitController extends Controller
{
    public function init(){
        return view('inicio.principal');
    }
}
