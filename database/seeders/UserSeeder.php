<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [[
            'biodata_id' => '1',
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ],
        [
            'biodata_id' => '2',
            'name' => 'Employee',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
