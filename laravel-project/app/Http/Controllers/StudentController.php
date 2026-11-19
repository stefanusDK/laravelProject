<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Students';
        $subtitle = 'Kelola data siswa.';
        $students = Student::orderBy('id')->get();
        $classrooms = Classroom::all();

        return view('admin.student.index', compact('title', 'subtitle', 'students', 'classrooms'));
    }

    public function create()
    {
        // Form tambah dibuka lewat modal di halaman index, jadi method ini tidak dipakai.
        return view('admin.student.create', ['classrooms' => Classroom::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|digits:10|unique:students,nisn',
            'email' => 'required|email',
            'sekolah' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'sekolah' => $request->sekolah,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'classroom_id' => $request->classroom_id,
        ]);

        return redirect('/admin/student')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('admin.student.edit', [
            'title' => 'Edit Siswa',
            'subtitle' => 'Ubah data siswa.',
            'student' => Student::findOrFail($id),
            'classrooms' => Classroom::all(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|digits:10|unique:students,nisn,' . $id,
            'email' => 'required|email',
            'sekolah' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::findOrFail($id)->update([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'sekolah' => $request->sekolah,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'classroom_id' => $request->classroom_id,
        ]);

        return redirect('/admin/student')->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy(string $id)
    {
        Student::findOrFail($id)->delete();

        return redirect('/admin/student')->with('success', 'Data siswa berhasil dihapus.');
    }
}
