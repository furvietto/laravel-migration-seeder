<?php

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 50; $i++) { 
          $newTrain = new Train();
          $newTrain->azienda = $faker->word(2,true);
          $newTrain->stazione_di_partenza = $faker->word(1,true);
          $newTrain->stazione_di_arrivo = $faker->word(1,true);
          $newTrain->orario_di_partenza = $faker->time();
          $newTrain->orario_di_arrivo = $faker->time();
          $newTrain->codice_treno = $faker->ean8();
          $newTrain->numero_carrozze = $faker->numberBetween(1,20);
          $newTrain->in_orario = $faker->boolean();
          $newTrain->cancellato = $faker->boolean();
          $newTrain->data_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
          $newTrain->data_di_arrivo = $faker->dateTimeBetween('+2 week', '+3 week');

          $newTrain->save();
      }  
    }
}
