<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LocationModel;

class locationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = [
            [
                'description' => 'Azare Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Bauchi Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Bukuru Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Gboko Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Gombe Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Headquarter',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Jos Metro Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Makurdi Region',
                'status' => '1',
                'added_by' => '1',
            ],
            [
                'description' => 'Otukpo Region',
                'status' => '1',
                'added_by' => '1',
            ],
        ];

        foreach ($location as $key => $value) {
            LocationModel::create($value);
        }
    }
}
