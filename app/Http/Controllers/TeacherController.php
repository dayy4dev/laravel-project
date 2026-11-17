<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function index(): View
    {
        $teachers = Teacher::with('subject')->get();

        return view('admin.teacher.index', ['title' => 'Teachers', 'teachers' => $teachers]);
    }
}
