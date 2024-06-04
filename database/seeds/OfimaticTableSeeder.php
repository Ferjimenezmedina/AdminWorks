<?php

use empleaDos\Entities\Ofimatic;
use Faker\Generator;

class OfimaticTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new Ofimatic();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        return [
                'user_id' => $this->getRandom('User')->id,
                'ofimatica' => $faker->randomElement([
                    'LibreOffice','OpenOffice','StarOffice','Lotus Notes',
                    'Microsoft Access','Microsoft Excel','Microsoft PowerPoint',
                    'Microsoft Word','Pages','Numbers', 'Keynote']),
            ];
    }

    public function run()
    {
       $this->createMultiple(160);
    }
}
