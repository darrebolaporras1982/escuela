<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    protected $model=Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'nivel'=>$this->faker->randomElement(['Junior','Intermedio','Avanzado','Master']),
            'horas_academicas'=>$this->faker->numberBetween(1,500),
            'profesor_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
