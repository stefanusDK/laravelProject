<?php

namespace App\Http\Controllers;

use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom';
        $subtitle = 'Kelola data kelas.';
        $classrooms = Classroom::all();

        return view('admin.classroom.index', compact('title', 'subtitle', 'classrooms'));
    }
}
