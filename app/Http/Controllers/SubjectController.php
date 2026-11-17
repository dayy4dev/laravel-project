<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\View\View;

class SubjectController extends Controller
{
    public function index(): View
    {
        $subjects = Subject::with('teacher')->get();

        return view('admin.subject.index', ['title' => 'Subjects', 'subjects' => $subjects]);
    }
}
