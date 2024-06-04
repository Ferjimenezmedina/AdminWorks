<?php

use empleaDos\Entities\Category;
use Faker\Generator;
use Illuminate\Support\Str as Str;

class CategoryTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   	public function getModel()
    {
        return new Category();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {   	
        $title = $faker->sentence($nbWords = 3);
		$slug = Str::slug($title);
	    return [
	            'category'    	=> $title,
	            'slug'			=> $slug
	        ];
    }

    public function run()
    {
       $this->createMultiple(8);
    }
}
