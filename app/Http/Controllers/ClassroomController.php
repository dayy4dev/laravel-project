<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\View\View;

class ClassroomController extends Controller
{
    public function index(): View
    {
        $classroom = Classroom::with('students')->get();

        return view('admin.classroom.index', ['title' => 'Classroom', 'classroom' => $classroom]);
    }
}
