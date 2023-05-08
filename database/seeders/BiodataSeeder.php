<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Biodata;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
        $sel = $faker->randomElement(['yes', 'no']);

        for ($i = 0; $i < 10; $i++) {
            Biodata::create([
                
                'staff_id' => $i+1,
                'title' => $faker->title,
                'nationalIDNumber' => $faker->numerify('###########'),
                'surname' => $faker->lastName,
                'first_name' => $faker->name,
                'other_name' => $faker->name,
                'gender' => $gender,
                'date_of_birth' => $faker->date,
                'marital_status' => $faker->name,
                'phone' => $faker->numerify('###########'),
                'official_email' => $faker->unique()->safeEmail(),
                'personal_email' => $faker->unique()->safeEmail(),
                'nationality' => $faker->country,
                'address' => $faker->address,
                'contact_address' => $faker->address,
                'state' => $faker->randomDigit,
                'lga' => $faker->randomDigit,
                'religion' => $faker->word,
                'date_of_first_appointment' => $faker->dateTime(),
                'date_of_confirmation' => $faker->dateTime(),
                'date_of_last_promotion' => $faker->dateTime(),
                'disability_status' => $sel,
                'disability_type' => $faker->word,
                'criminal_record' => $sel,
                'debt_status' => $sel,
                'grade_level' => $faker->randomDigit,
                'job_role' => $faker->randomDigit,
                'created_by' => $faker->randomDigit,
            ]);
        }

    }
}
