<?php

use empleaDos\Entities\Company\Demand;
use Faker\Generator;

class DemandTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Demand();
    }
    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'vacant_id' => $this->getRandom('Vacant')->id,
            'demand' => $faker->paragraph(1, true),
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
    }
}
