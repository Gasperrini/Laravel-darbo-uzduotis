<?php

use App\Truck;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Truck::create([
            'make_id'     =>  $faker->numberBetween($min = 1, $max = 4),
            'year'        =>  $faker->numberBetween($min = 1900, $max = 2020),
            'owner'       =>  $faker->name,
            'owner_number'=>  $faker->randomDigit,
            'comments'    =>  $faker->realText($maxNbChars = 200, $indexSize = 2),
        ]);
    }
}
