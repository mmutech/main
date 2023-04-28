<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feeder;

class FeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $feeders = [
            [
                'area_office_id'    => 1, 
                'comment'           => 'Feeder 1', 
                'description'       => 'Details',
                'status'            => 1, 
                'created_by'          => 1, 
            ],
            [
                'area_office_id'    => 1, 
                'comment'           => 'Feeder 2',
                'description'       => 'Details',
                'status'            => 1, 
                'created_by'          => 1, 
            ]
        ];

        foreach ($feeders as $feeder) {
            Feeder::create($feeder);
        }
    }
}
