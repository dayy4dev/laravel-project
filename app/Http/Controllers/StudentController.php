<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $classrooms = Classroom::all();

        return view('admin.student.index', compact(
            'students',
            'classrooms',
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|digits_between:1,20|unique:students,nis',
            'classroom_id' => 'required|exists:classrooms,id',
            'address' => 'required|string',
        ], [
            'name.required' => 'Nama siswa wajib diisi',
            'nis.required' => 'NIS wajib diisi',
            'nis.digits_between' => 'NIS harus berupa angka positif',
            'nis.unique' => 'NIS sudah terdaftar',
            'classroom_id.required' => 'Kelas wajib diisi',
            'classroom_id.exists' => 'Kelas tidak ditemukan',
            'address.required' => 'Alamat wajib diisi',
        ]);

        Student::create($validated);

        return redirect()->route('admin.students.index')->with('success', 'Siswa berhasil ditambahkan');
    }
}
