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
        $subjects = Subject::orderBy('name')->get();

        return view('admin.teacher.index', [
            'title' => 'Teachers',
            'teachers' => $teachers,
            'subjects' => $subjects,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|numeric|unique:teachers,niy',
            'subject_id' => 'required|exists:subjects,id',
            'start_date' => 'required|date',
        ], [
            'name.required' => 'Nama guru wajib diisi',
            'niy.required' => 'NIY wajib diisi',
            'niy.unique' => 'NIY sudah terdaftar',
            'subject_id.required' => 'Mata pelajaran wajib diisi',
            'subject_id.exists' => 'Mata pelajaran tidak ditemukan',
            'start_date.required' => 'Tanggal mulai wajib diisi',
        ]);

        Teacher::create($validated);

        return redirect()->route('admin.teachers')->with('success', 'Guru berhasil ditambahkan');
    }
}
