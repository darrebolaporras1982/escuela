<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno=new Alumno();
        $alumno->nom_ape="David Arrebola";
        $alumno->edad=41;
        $alumno->direccion="Txotena Kalea 12";
        $alumno->telefono='111111111';
        $alumno->save();
    }
}
