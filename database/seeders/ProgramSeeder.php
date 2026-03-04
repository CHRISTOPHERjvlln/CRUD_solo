<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            ['code' => 'BSIT', 'description' => 'Bachelor of Science in Information Technology'],
            ['code' => 'BSCS', 'description' => 'Bachelor of Science in Computer Science'],
            ['code' => 'BSEMC', 'description' => 'Bachelor of Science in Entertainment and Multimedia Computing'],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}