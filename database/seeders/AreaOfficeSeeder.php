<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AreaOffice;

class AreaOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $area_office = [
            [
                'location_id'    => 1, 
                'comment'           => 'Area Office 1', 
                'description'       => 'Details',
                'status'            => 1, 
                'created_by'          => 1, 
            ],
            [
                'location_id'    => 1, 
                'comment'           => 'Area Office 2',
                'description'       => 'Details',
                'status'            => 1, 
                'created_by'          => 1, 
            ]
        ];

        foreach ($area_office as $office) {
            AreaOffice::create($office);
        }
    }
}
