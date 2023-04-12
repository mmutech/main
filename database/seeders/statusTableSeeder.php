<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\statusModel;

class statusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'status_name' => 'Active'
            ],
            [
                'status_name' => 'Inactive'
            ],
            [
                'status_name' => 'Approved'
            ],
            [
                'status_name' => 'Pending'
            ],
            [
                'status_name' => 'Rejected'
            ],
        ];

        foreach($status as $key =>$value){
            statusModel::create($value);
        }
    }
}
