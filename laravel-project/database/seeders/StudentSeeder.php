<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::factory(15)->create([
            'classroom_id' => fn () => Classroom::inRandomOrder()->value('id'),
        ]);
    }
}
