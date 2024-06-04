<?php

use empleaDos\Entities\AcademicData;
use Faker\Generator;

class AcademicDataTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new AcademicData();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   
    	$yer1 = $faker->numberBetween(1930,2016);
    	$yer2 = $yer1+$faker->numberBetween(1,4);		
        return [
                'user_id' => $this->getRandom('User')->id,
                'max_studio' => $faker->randomElement([
                	'Secundaria','Bachillerato' ,
                	'Estudios Universitarios sin Terminar',
                	'T�cnico Titulado',
                	'Estudios Universitarios - No Titulado',
                	'Estudios Universitarios - Titulado',
                	'Maestr�a',
                	'Doctorado',]),
        	    'institucion' => $faker->sentence(6,true),
                'title_study' => $faker->sentence(5,true),
                'ac_estudia' => $faker->numberBetween(0,1),
                'mes_start' => $faker->monthName,
                'year_start' => $yer1,
                'mes_fin' => $faker->monthName,
                'year_fin' => $yer2,
            ];
    }

    public function run()
    {
       $this->createMultiple(20);
    }
}
