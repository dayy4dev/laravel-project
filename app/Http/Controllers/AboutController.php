<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $title = 'About';
        $nama  = 'Muhammad Dafi Ristiansyah';
        $hobby = 'Playing video games';
        $repository = "dayy4dev";
        return view('admin.about', [
            'title' => $title,
            'name' => $nama,
            'hobby' => $hobby,
            'github' => $repository
        ]);
    }
}
