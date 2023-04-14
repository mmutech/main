<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnitModel;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $units = [
            [
                'description' => 'Credit Risk Management',
                'department_id' => 1,
                'comment' => 'Begere-BEGERE',
                'status' => 1,
                'added_by' => 1,
            ],
            [
                'description' => 'Debt Recovery',
                'department_id' => 1,
                'comment' => 'Begere-BEGERE',
                'status' => 1,
                'added_by' => 1,
            ]

        ];

        foreach ($units as $unit) {
            UnitModel::create($unit);
        }
    }
}
