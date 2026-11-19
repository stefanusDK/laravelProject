<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Classroom::all() as $classroom) {
            Student::factory(3)->create(['classroom_id' => $classroom->id]);
        }
    }
}
