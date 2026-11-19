<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'sekolah' => fake()->company(),
            'tanggal_lahir' => fake()->date(),
            'nisn' => fake()->numerify('##########'),
            'classroom_id' => Classroom::factory(),
            'tempat_lahir' => fake()->city(),
        ];
    }
}
