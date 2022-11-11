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

            $trains = new Train();

            
            $trains->azienda = $faker->name();
            $trains->stazione_partenza = $faker->time();
            $trains->stazione_arrivo = $faker->time();

            
            
            $trains->orario_partenza = $faker->time();
            $trains->orario_arrivo = $faker->time();


            $trains->save();

        }

    }
}
