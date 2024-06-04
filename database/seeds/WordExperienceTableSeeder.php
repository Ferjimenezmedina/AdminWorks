<?php

use empleaDos\Entities\WorkExperience;
use Faker\Generator;

class WordExperienceTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new WorkExperience();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id'			=> $this->getRandom('User')->id,
                'empresa_exp'		=> $faker->company,
        	    'puesto_exp'		=> $faker->jobTitle,
        	    'descrip_exp'		=> $faker->text(200),
        	    'to_date'			=> $faker->randomElement([true,false]),
        	    'mo_ini_exp'		=> $faker->monthName,
        	    'y_ini_exp'			=> $faker->year(2015),
        	    'mo_fin_exp'		=> $faker->monthName,
        	    'y_fin_exp'			=> $faker->year('now'),
        	    'referencia'		=> $faker->randomElement(['male','female']),
        	    'puesto'			=> $faker->sentence,
        	    'tel_experien'		=> $faker->phoneNumber,
            ];
    }

    public function run()
    {
       $this->createMultiple(120);
    }
}
