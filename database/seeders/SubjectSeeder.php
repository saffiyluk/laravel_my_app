<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_seed = [
            ['id'=>'1','subject_code' => 'ITT626', 'subject_name' => 'Backend', 'lecturer_name' => 'Sir Asrol'],
            ['id'=>'2','subject_code' => 'CS251', 'subject_name' => 'Data Structure', 'lecturer_name' => 'Prof. Abu'],
            ['id'=>'3','subject_code' => 'CS110', 'subject_name' => 'Programming Fundamentals', 'lecturer_name' => 'Dr. Siti'],
            ['id'=>'4','subject_code' => 'CS330', 'subject_name' => 'Database Systems', 'lecturer_name' => 'Mr. Rahman'],
            ['id'=>'5','subject_code' => 'CS220', 'subject_name' => 'Operating Systems', 'lecturer_name' => 'Ms. Lim'],
            ];

        foreach ($subject_seed as $subject_seed)
        {
            Subject::firstOrCreate($subject_seed);
        }
    }
}
