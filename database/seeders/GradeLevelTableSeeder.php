<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GradeLevelModel;

class GradeLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $grade_level = [
            [
                'description'       => 'JT_1',
                'monthly_gross'     => 2500,
                'comment'           => 'Junior Trainee Level 1',
                'designation_id'    => 1,
                'status'            => 1,
                'added_by'          => 1,
            ],
            [
                'description'       => 'JT_2',
                'monthly_gross'     => 3500,
                'comment'           => 'Junior Trainee Level 1',
                'designation_id'    => 2,
                'status'            => 1,
                'added_by'          => 1,
            ],

        ];

        foreach ($grade_level as $level) {
            GradeLevelModel::create($level);
        }
    }
}
