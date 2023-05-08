<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LeaveType;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $leaves = [
            [
            'name' => 'Annual Leave',
            'description' => 'Annual Leave',
            'number_of_days' => '30',
            'created_by' => '1',
        ],
        [
            'name' => 'Casual Leave',
            'description' => 'Casual Leave',
            'number_of_days' => '10',
            'created_by' => '1',
        ]];
        
        foreach ($leaves as $leave) {
            LeaveType::create($leave);
        }
    }
}
