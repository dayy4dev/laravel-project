<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        // $this->call(ClassroomSeeder::class);

        // Student::factory(15)->create(); // membuat 15 data student baru
        // Classroom::factory(10)->create(); // membuat 10 data classroom baru
        //
        Classroom::factory(14)
            ->hasStudents(5) // setiap kelas punya 5 siswa
            ->create();

        $this->call([
            SubjectSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
