<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hall_seed = [
            ['id'=>'1','lecture_hall_name'=>'Dewan Kuliah','lecture_hall_place' => 'Building A'],
            ['id'=>'2','lecture_hall_name'=>'Makmal Komputer 1','lecture_hall_place' => 'Building B'],
            ['id'=>'3','lecture_hall_name'=>'Makmal Komputer 2','lecture_hall_place' => 'Building B'],
            ['id'=>'4','lecture_hall_name'=>'Bilik Seminar','lecture_hall_place' => 'Building C'],
            ['id'=>'5','lecture_hall_name'=>'Auditorium','lecture_hall_place' => 'Building D'],
            ];

        foreach ($hall_seed as $hall_seed)
        {
            Hall::firstOrCreate($hall_seed);
        }
    }
}
