<?php

namespace Database\Seeders;
use App\Models\Alumno;
use App\Models\Profesor;
use App\Models\Curso;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(AlumnoSeeder::class);//este es para llamar a los seeder
        Alumno::factory(50)->create();//este llamara a la funcion de factory

        //$this->call(ProfesorSeeder::class);//este es para llamar a los seeder
        Profesor::factory(50)->create();//este llamará a la funcion de factory

        //$this->call(CursoSeeder::class);//este es para llamar a los seeder
        Curso::factory(50)->create();//este llamará a la funcion de factory
        // \App\Models\User::factory(10)->create();


    }
}
