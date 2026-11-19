<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->get();
        return view('admin.subject.index', [
            'title' => 'Data Subjects',
            'subtitle' => 'Daftar mata pelajaran',
            'subjects' => $subjects
        ]);
    }
}
