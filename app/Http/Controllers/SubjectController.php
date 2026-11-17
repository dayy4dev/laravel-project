<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->get();

        return view('admin.subject.index', ['title' => 'Subjects', 'subjects' => $subjects]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
        ], [
            'name.required' => 'Nama mata pelajaran wajib diisi',
            'name.unique' => 'Mata pelajaran sudah terdaftar',
        ]);

        Subject::create($validated);

        return redirect()->route('admin.subjects')->with('success', 'Mata pelajaran berhasil ditambahkan');
    }
}
