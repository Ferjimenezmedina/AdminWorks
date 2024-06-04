<?php

use empleaDos\Entities\Company\Postulation;
use Faker\Generator;

class PostulationTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Postulation();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'vacant_id' => $this->getRandom('Vacant')->id,
            'user_id' => $this->getRandom('User')->id,

        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMultiple(250);
    }
}
