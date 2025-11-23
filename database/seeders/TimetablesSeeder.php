<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timetable;

class TimetablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timetables_seed = [
            [
                'user_id' => 1,
                'subject_id' => 1,
                'day_id' => 1,
                'hall_id' => 1,
                'group_id' => 1,
                'time_from' => '08:00:00',
                'time_to' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'subject_id' => 2,
                'day_id' => 2,
                'hall_id' => 2,
                'group_id' => 1,
                'time_from' => '10:00:00',
                'time_to' => '12:00:00',
            ],
            [
                'user_id' => 3,
                'subject_id' => 3,
                'day_id' => 3,
                'hall_id' => 3,
                'group_id' => 2,
                'time_from' => '13:00:00',
                'time_to' => '15:00:00',
            ],
            
        ];
        foreach ($timetables_seed as $timetables_seed){
            Timetable::firstOrCreate($timetables_seed);
        }
    }
}

// [
            //     'user_id' => User::inRandomOrder()->first()->id,
            //     'subject_id' => Subject::inRandomOrder()->first()->id,
            //     'day_id' => Day::inRandomOrder()->first()->id,
            //     'hall_id' => Hall::inRandomOrder()->first()->id,
            //     'group_id' => Group::inRandomOrder()->first()->id,
            //     'time_from' => '08:00:00',
            //     'time_to' => '09:30:00',
            // ],
            // [
            //     'user_id' => User::inRandomOrder()->first()->id,
            //     'subject_id' => Subject::inRandomOrder()->first()->id,
            //     'day_id' => Day::inRandomOrder()->first()->id,
            //     'hall_id' => Hall::inRandomOrder()->first()->id,
            //     'group_id' => Group::inRandomOrder()->first()->id,
            //     'time_from' => '09:30:00',
            //     'time_to' => '11:00:00',
            // ],
            // [
            //     'user_id' => User::inRandomOrder()->first()->id,
            //     'subject_id' => Subject::inRandomOrder()->first()->id,
            //     'day_id' => Day::inRandomOrder()->first()->id,
            //     'hall_id' => Hall::inRandomOrder()->first()->id,
            //     'group_id' => Group::inRandomOrder()->first()->id,
            //     'time_from' => '11:00:00',
            //     'time_to' => '12:30:00',
            // ],
            // [
            //     'user_id' => User::inRandomOrder()->first()->id,
            //     'subject_id' => Subject::inRandomOrder()->first()->id,
            //     'day_id' => Day::inRandomOrder()->first()->id,
            //     'hall_id' => Hall::inRandomOrder()->first()->id,
            //     'group_id' => Group::inRandomOrder()->first()->id,
            //     'time_from' => '13:30:00',
            //     'time_to' => '15:00:00',
            // ],
            // [
            //     'user_id' => User::inRandomOrder()->first()->id,
            //     'subject_id' => Subject::inRandomOrder()->first()->id,
            //     'day_id' => Day::inRandomOrder()->first()->id,
            //     'hall_id' => Hall::inRandomOrder()->first()->id,
            //     'group_id' => Group::inRandomOrder()->first()->id,
            //     'time_from' => '15:00:00',
            //     'time_to' => '16:30:00',
            // ],
            // [
            //     'user_id' => User::inRandomOrder()->first()->id,
            //     'subject_id' => Subject::inRandomOrder()->first()->id,
            //     'day_id' => Day::inRandomOrder()->first()->id,
            //     'hall_id' => Hall::inRandomOrder()->first()->id,
            //     'group_id' => Group::inRandomOrder()->first()->id,
            //     'time_from' => '16:30:00',
            //     'time_to' => '18:00:00',
            // ],
