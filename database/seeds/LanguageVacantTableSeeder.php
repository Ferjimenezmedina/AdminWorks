<?php

use empleaDos\Entities\Company\LanguajesVacant;
use Faker\Generator;

class LanguageVacantTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new LanguajesVacant();
    }
    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'vacant_id' => $this->getRandom('Vacant')->id,
            'idioma' => $faker->randomElement(['Español','Inglés','Frances','Italiano','Portugués']),
            'idioma_nivel' => $faker->randomElement(['Nativo','Muy Básico','Básico','Intermedio','Avanzado']),
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMultiple(100);
    }
}
