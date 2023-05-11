<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExitInterviewModel;

class ExitInterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $exit_interview = [
            [
                'comment'   => 'Reason for resign',
                'exit_type_id'       => 1,
                'status'        => 1,
                'added_by'      => 1,
                'question'      => 'Why do you want to resign?',
            ],
            [
                'comment'   => 'Reason for terminations',
                'exit_type_id'       => 2,
                'status'        => 1,
                'added_by'      => 1,
                'question'      => 'How do you get terminated?',
            ],
        ];

        foreach ($exit_interview as $role) {
            ExitInterviewModel::create($role);
        }
    }
}
