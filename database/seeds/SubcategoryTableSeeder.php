<?php

use empleaDos\Entities\Subcategory;
use Faker\Generator;
use Illuminate\Support\Str as Str;

class SubcategoryTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getModel()
    {
        return new Subcategory();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        $title = $faker->sentence;
		$slug = Str::slug($title);
	    return [
	            'category_id'       => $this->getRandom('Category')->id,
	            'subcategory'    	=> $title,
	            'slug'				=> $slug
	        ];
    }

    public function run()
    {
       $this->createMultiple(50);
    }
}
