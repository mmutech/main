<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobRoleModel;

class JobRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $job_role = [
            [
                'description'   => 'Web Developer',
                'comment'       => 'Build Web Apps',
                'status'        => 1,
                'added_by'      => 1,
            ],
            [
                'description'   => 'Cloud Developer',
                'comment'       => 'Deploy Apps',
                'status'        => 1,
                'added_by'      => 2,
            ],
        ];

        foreach ($job_role as $role) {
            JobRoleModel::create($role);
        }
    }
}
