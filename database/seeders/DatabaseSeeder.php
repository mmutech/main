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
        $this->call([
            UserSeeder::class,
            statusTableSeeder::class,
            locationTableSeeder::class,
            DepartmentTableSeeder::class,
            DivisionTableSeeder::class,
            GradeLevelTableSeeder::class,
            JobRoleTableSeeder::class,
            UnitTableSeeder::class,
            StateTableSeeder::class,
            LGATableSeeder::class,
            FeederSeeder::class,
            AreaOfficeSeeder::class,
            BiodataSeeder::class,
            LeaveTypeSeeder::class,
        ]);
        
         //\App\Models\User::factory(10)->create();
        //\App\Models\User::factory()->create([
        //     'biodata_id' => '1',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
