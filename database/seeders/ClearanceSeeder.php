<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClearanceModel;

class ClearanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        $clearance = [
            [
                'comment'   => 'Termination',
                'clr_date'       => '2023-05-11',
                'cleared_by'      => 1,
                'clr_status'      => 3,
                'unit_dept'      => 1,
            ],
            [
                'comment'   => 'Resign',
                'clr_date'       => '2023-04-30',
                'cleared_by'      => 2,
                'clr_status'      => 5,
                'unit_dept'      => 1,
            ],
        ];

        foreach ($clearance as $role) {
            ClearanceModel::create($role);
        }
    }
}
