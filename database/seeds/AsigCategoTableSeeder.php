<?php

use empleaDos\Entities\AsigCatego;
use Faker\Generator;

class AsigCategoTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new AsigCatego();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
	    return [
	            'user_id'    			=> $this->getRandom('User')->id,
	            'category_id'			=> $this->getRandom('Category')->id,
	            'subcategory_id'		=> $this->getRandom('Subcategory')->id,
	        ];
    }

    public function run()
    {
       $this->createMultiple(70);
    }
}
