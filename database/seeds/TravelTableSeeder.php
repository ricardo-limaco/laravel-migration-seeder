<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->city = $faker->city();
            $newTravel->airline = $faker->company();
            $newTravel->departure = $faker->dateTimeBetween('+0 week', '+1 week');
            $newTravel->arrival = $faker->dateTimeBetween('+1 week', '+4 week');
            $newTravel->price = $faker->numberBetween(100, 2000);
            $newTravel->save();
        }
    }
}
