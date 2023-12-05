<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table='profesors';//le digo que tabla tiene que usar el modelo
    protected $primarykey='id';//le digo que atributo es la clave primaria
    protected $fillable=[   //
        'nom_ape',          //
        'profesion',        //===>pongo los atributos que podran pasarse
        'grado_academico',  //
        'telefono'          //
    ];
    protected $hidden=[
        'id'                // pongo los atributos que estarán ocultos
    ];
}
