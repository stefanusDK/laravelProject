<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        // Setiap mapel diajar 1 guru (relasi 1:1)
        foreach (Subject::all() as $subject) {
            Teacher::factory()->create(['subject_id' => $subject->id]);
        }
    }
}
