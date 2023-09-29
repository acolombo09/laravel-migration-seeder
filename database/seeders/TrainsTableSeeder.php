<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;	

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {

        // voglio svuotare ogni volta la tabella
        // utile in questo caso per simulare il tabellone treni come in real
        Train::truncate();

        for ($i=0; $i<10; $i++) {
        
            $newTrain= new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time('H:i:s');
            $newTrain->train_code = $faker->regexify('[A-Z]{3}[0-9]{1}[A-Z]{2}[0-9]{2}');
            $newTrain->cart_number = $faker->numberBetween(2,30);
            $newTrain->in_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();

            $newTrain->data = $faker->dateTimeInInterval("now", '2 weeks');	

            $newTrain->save();

        }
    }
}
