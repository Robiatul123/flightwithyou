<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Locale;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // City::factory()->count(50)->create()->unique();

        $faker = Factory::create('id_ID');

            foreach (range(1,50) as $index) {
            City::create([
                'kota'  => $faker->unique()->city()
            ]);
        }
    }
}
