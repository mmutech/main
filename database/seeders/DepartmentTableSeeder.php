<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DepartmentModel;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $department = [
            [
                'description' => 'Corporate Finance',
                'division_id' => 1,
                'comment' => 'Begere-BEGERE',
                'status' => 1,
                'added_by' => 1,
            ],
            [
                'description' => 'Large Power',
                'division_id' => 2,
                'comment' => 'Begere-BEGERE',
                'status' => 1,
                'added_by' => 1,
            ]

        ];

        foreach ($department as $dept) {
            DepartmentModel::create($dept);
        }
    }
}
