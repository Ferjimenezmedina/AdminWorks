<?php

use empleaDos\Entities\Software;
use Faker\Generator;


class SoftwareTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new Software();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id' => $this->getRandom('User')->id,
                'software' => $faker->sentence(2,true),
            ];
    }

    public function run()
    {
       $this->createMultiple(160);
    }
}
