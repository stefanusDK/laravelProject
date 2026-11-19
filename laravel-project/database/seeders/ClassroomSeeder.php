<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run(): void
    {
        $grades = ['X', 'XI', 'XII'];

        $majors = [
            'PPLG'    => ['count' => 3, 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            'DKV'     => ['count' => 6, 'major' => 'Desain Komunikasi Visual'],
            'Animasi' => ['count' => 5, 'major' => 'Animasi'],
        ];

        foreach ($grades as $grade) {
            foreach ($majors as $code => $data) {
                for ($i = 1; $i <= $data['count']; $i++) {
                    Classroom::create([
                        'name' => "$grade $code $i",
                        'major' => $data['major'],
                    ]);
                }
            }
        }
    }
}
