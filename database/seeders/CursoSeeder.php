<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso=new Curso();
        $curso->nombre='HTML';
        $curso->nivel='Master';
        $curso->horas_academicas=50;
        $curso->profesor_id=1;
        $curso->save();
    }
}
