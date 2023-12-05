<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesor=new Profesor();
        $profesor->nom_ape='Elisabeth Lekue';
        $profesor->profesion='Maetra';
        $profesor->grado_academico='Master';
        $profesor->telefono='111111111';
        $profesor->save();
    }
}
