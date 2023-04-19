<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DivisionModel;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $division = [
            [
                'description' => 'Account and Finance',
                'comment' => 'Begere-BEGERE',
                'status' => 1,
                'added_by' => 1,
            ],
            [
                'description' => 'Commercial',
                'comment' => 'Begere-BEGERE',
                'status' => 1,
                'added_by' => 1,
            ]

        ];

        foreach ($division as $div) {
            DivisionModel::create($div);
        }
    }
}
