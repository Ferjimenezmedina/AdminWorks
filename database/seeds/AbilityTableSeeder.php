<?php

use empleaDos\Entities\Ability;
use Faker\Generator;

class AbilityTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new Ability();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id' => $this->getRandom('User')->id,
                'ability' => $faker->sentence,
                'nivel' => $faker->randomElement(['Básico','Intermedio','Avanzado']),
                'year_exp' => $faker->randomElement(['1 año','2 años','3 años','Más de 5 años']),
            ];
    }

    public function run()
    {
       $this->createMultiple(200);
    }
}
