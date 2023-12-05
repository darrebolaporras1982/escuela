<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;
use App\Models\Alumno;
class Curso extends Model
{
    use HasFactory;
    protected $table='cursos';
    protected $primarykey='id';
    protected $fillable=[
        'nombre',
        'nivel',
        'horas_academicas'
    ];
    protected $hidden=[
        'id'
    ];
    public function profesor(){
        return $this->belongsTo(Profesor::class);//del lado uno al lado muchos
    }

    public function alumno(){
        return $this->belongsToMany(Alumno::class);
    }
}
