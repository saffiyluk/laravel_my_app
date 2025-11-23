<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group_seed = [
            ['id'=>'1','name'=>'CS251','part'=>'4'],
            ['id'=>'2','name'=>'CS110','part'=>'2'],
            ['id'=>'3','name'=>'CS330','part'=>'6'],
            ['id'=>'4','name'=>'CS220','part'=>'3'],
            ['id'=>'5','name'=>'CS440','part'=>'8'],
            ];

        foreach ($group_seed as $group_seed)
        {
            Group::firstOrCreate($group_seed);
        }
    }
}
