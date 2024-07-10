<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for ($i = 0; $i < 50; $i++) {

            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->destination_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->train_code = $faker->bothify('??###');
            $train->cars_number = $faker->numberBetween(2, 30);
            $train->on_schedule = $faker->boolean();
            $train->is_cancelled = $faker->boolean();

            $train->save();

        }

    }
}
