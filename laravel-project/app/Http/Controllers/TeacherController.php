<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('admin.teacher.index', [
            'title' => 'Data Teachers',
            'subtitle' => 'Daftar seluruh guru pengajar',
            'teachers' => $teachers,
            'subjects' => $subjects,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|digits:10|unique:teachers,niy',
            'subject_id' => 'required|exists:subjects,id',
            'start_date' => 'required|date',
        ]);

        Teacher::create([
            'name' => $request->name,
            'niy' => $request->niy,
            'subject_id' => $request->subject_id,
            'start_date' => $request->start_date,
        ]);

        return redirect('/teachers')->with('success', 'Data guru berhasil ditambahkan.');
    }
}
