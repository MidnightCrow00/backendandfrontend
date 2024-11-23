<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Virag;
use Faker\Factory as Faker;


class ViragokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Virag::create([
                'nev' => $faker->word(),
                'leiras' => $faker->sentence(10),
                'ar' => $faker->numberBetween(500, 5000),
                'db' => $faker->numberBetween(1, 20),
            ]);
    }
}
}
