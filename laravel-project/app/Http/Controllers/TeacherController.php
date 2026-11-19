<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        return view('admin.teacher.index', [
            'title' => 'Data Teachers',
            'subtitle' => 'Daftar seluruh guru pengajar',
            'teachers' => $teachers
        ]);
    }
}
