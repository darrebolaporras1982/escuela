<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table='alumnos';
    protected $primarykey='id';
    protected $fillable=[
        'nom_ape',
        'edad',
        'direccion',
        'telefono'
    ];
    protected $hidden=[
        'id'
    ];
}
