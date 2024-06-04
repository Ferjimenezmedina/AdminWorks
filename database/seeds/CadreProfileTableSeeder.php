<?php

use empleaDos\Entities\CadreProfile;
use Faker\Generator;

class CadreProfileTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new CadreProfile();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id' => $this->getRandom('User')->id,
                'title_prof' => $faker->sentence(4,true),
        	    'specialty' => $faker->sentence(2,true),
        	    'descrip_prof' => $faker->text(300),
            ];
    }

    public function run()
    {
       $this->createMultiple(20);
    }
}
