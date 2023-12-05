<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Curso;

class AlumnoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno1=Alumno::find(1);
        $alumno2=Alumno::find(2);
        $alumno3=Alumno::find(3);

        $curso1=Curso::find(1);
        $curso2=Curso::find(2);
        $curso3=Curso::find(3);

        $curso1->alumno()->attach([$alumno1->id,$alumno2->id]);
        $curso2->alumno()->attach([$alumno2->id,$alumno3->id]);
        $curso3->alumno()->attach([$alumno3->id,$alumno1->id]);
    }
}
