<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom';
        $subtitle = 'Kelola data kelas.';
        $classrooms = Classroom::all();

        return view('admin.classroom.index', compact('title', 'subtitle', 'classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
        ]);

        Classroom::create([
            'name' => $request->name,
            'major' => $request->major,
        ]);

        return redirect('/admin/classroom')->with('success', 'Data kelas berhasil ditambahkan.');
    }
}
