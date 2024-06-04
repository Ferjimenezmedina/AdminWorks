<?php

use empleaDos\Entities\Company\Leaflet;
use Faker\Generator;

class LeafletTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Leaflet();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'company_id'    => $this->getRandom('Company')->id,
            'user_id' => $this->getRandom('User')->id,
        ];
    }

    public function run()
    {
        $this->createMultiple(160);
    }
}
