<?php

use empleaDos\Entities\AcaDatExt;
use Faker\Generator;

class AcademicDataExtraTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new AcaDatExt();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id' => $this->getRandom('User')->id,
                'type_acex' => $faker->randomElement(['Titulo', 'Certificado', 'Otro']),
        	    'acaext_tit' => $faker->sentence(6,true),
            ];
    }

    public function run()
    {
       $this->createMultiple(50);
    }
}
