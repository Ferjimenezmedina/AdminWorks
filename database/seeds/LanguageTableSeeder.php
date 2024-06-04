<?php

use empleaDos\Entities\Languages;
use Faker\Generator;

class LanguageTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new Languages();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id' => $this->getRandom('User')->id,
                'idioma' => $faker->randomElement(['Español','Inglés','Frances','Italiano','Portugués']),
        	    'idioma_nivel' => $faker->randomElement(['Nativo','Muy Básico','Básico','Intermedio','Avanzado']),
            ];
    }

    public function run()
    {
       $this->createMultiple(50);
    }
}
