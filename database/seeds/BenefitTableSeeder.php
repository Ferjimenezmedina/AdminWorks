<?php

use empleaDos\Entities\Company\Benefit;
use Faker\Generator;

class BenefitTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Benefit();
    }
    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'vacant_id' => $this->getRandom('Vacant')->id,
            'benefit' => $faker->paragraph(1, true),
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMultiple(150);
    }
}
