<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\train;

class CreatetrainsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        
        for($i = 0; $i < 20; $i++){

            $train = new Train();

            
            $train->azienda = $faker->name();
            $train->stazione_partenza = $faker->time();
            $train->stazione_arrivo = $faker->time();

            $randomDate = $faker->date();
            
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();


            $train->save();

        }

    }
}
