<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExitTypeModel;

class ExitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $exit_type = [
            [
                'description'   => 'Termination',
                'exit_type'       => 'Termination',
                'status'        => 1,
                'added_by'      => 1,
            ],
            [
                'description'   => 'Resign',
                'exit_type'       => 'Resign',
                'status'        => 1,
                'added_by'      => 1,
            ],
        ];

        foreach ($exit_type as $role) {
            ExitTypeModel::create($role);
        }
    }
}
