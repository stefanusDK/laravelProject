<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'X PPLG 1',
                'X PPLG 2',
                'XI PPLG 1',
                'XI PPLG 2',
                'XII PPLG 1',
                'XII PPLG 2',
                'X Anim 1',
                'XI Anim 1',
                'XII Anim 1',
                'X DKV 1',
                'XI DKV 1',
            ]),
            'major' => fake()->randomElement([
                'Pengembangan Perangkat Lunak dan Gim',
                'Animasi',
                'Desain Komunikasi Visual',
            ]),
        ];
    }
}
