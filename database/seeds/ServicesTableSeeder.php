<?php

use empleaDos\Entities\Service;
use Faker\Generator;

class ServicesTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Service();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'service' => $faker->sentence(6,true),
            'category_id' => $this->getRandom('Category')->id,
            'subcategory_id' => $this->getRandom('Subcategory')->id,
            'description' => $faker->paragraph(5),
            'service_type' => $faker->boolean(),
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMultiple(200);
    }
}
