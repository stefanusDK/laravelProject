<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Subject::all() as $subject) {
            Teacher::factory()->create(['subject_id' => $subject->id]);
        }
    }
}
