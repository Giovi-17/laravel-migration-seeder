<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10; $i++ ){

            $new_holiday = new Holiday();
            $new_holiday->luogo_partenza = $faker->city();
            $new_holiday->luogo_arrivo = $faker->city();
            $new_holiday->data_partenza = $faker->dateTime();
            $new_holiday->price = $faker->numberBetween(0, 100);
            $new_holiday->save();

        }

    }
}
