<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExitInitModel;

class ExitInitiationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $exit_initiation = [
            [
                'comment'   => 'I resign for personel reasons',
                'exit_type_id'       => 1,
                'status'        => 4,
                'added_by'      => 1,
                'ldate'      => '2023-04-10',
                'rdate'      => '2023-03-10',
                'overallStatus'   => 4,
                'adminComment'    => 'All the best',
            ],
            [
                'comment'   => 'I resign',
                'exit_type_id'       => 2,
                'status'        => 4,
                'added_by'      => 2,
                'ldate'      => '2023-05-11',
                'rdate'      => '2023-04-11',
                'overallStatus'   => 4,
                'adminComment'    => 'Wish you best of luck',
            ],
        ];

        foreach ($exit_initiation as $role) {
            ExitInitModel::create($role);
        }

    }
}
