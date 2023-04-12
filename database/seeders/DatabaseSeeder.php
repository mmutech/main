<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(statusTableSeeder::class);
        $this->call(locationTableSeeder::class);
         //\App\Models\User::factory(10)->create();
        //\App\Models\User::factory()->create([
        //     'biodata_id' => '1',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
