<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\Subject;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(ClassroomSeeder::class);
        Student::factory(15)->create([
            'classroom_id' => fn () => Classroom::inRandomOrder()->value('id'),
        ]);

        // 10 data mapel, masing-masing diajar 1 guru
        $subjects = Subject::factory(10)->create();
        foreach ($subjects as $subject) {
            Teacher::factory()->create(['subject_id' => $subject->id]);
        }
    }
}
