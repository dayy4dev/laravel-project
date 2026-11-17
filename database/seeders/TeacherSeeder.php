<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Butuh 10 subject; kalau belum ada, buat dulu supaya tiap guru dapat 1 mapel.
        if (Subject::count() < 10) {
            Subject::factory(10 - Subject::count())->create();
        }

        Subject::doesntHave('teacher')->get()->each(function (Subject $subject) {
            Teacher::factory()->for($subject)->create();
        });
    }
}
