<?php

use Carbon\Carbon;
use empleaDos\Entities\Company\Vacant;
use Faker\Generator;

class VacantTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Vacant();
    }
    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        $numero = $faker->randomElement(['1','5','10','30']);
        $date = Carbon::now();
        $exp = $date->addDay($numero);
        return [
            'company_id'		=> $this->getRandom('Company')->id,
            'activo'		    => 'true',
            'title'		        => $faker->sentence(6,true),
            'specialty'		    => $faker->sentence(3,true),
            'category_id'		=> $this->getRandom('Category')->id,
            'subcategory_id'	=> $this->getRandom('Subcategory')->id,
            'num_vacan'			=> $faker->randomDigit,
            'description'		=> $faker->text(500),
            'type_contract'		=> $faker->randomElement(['permanent','temporary','practices']),
            'type_schedule'		=> $faker->randomElement(['midti','fulti','perhour']),
            'type_salary'		=> $faker->randomElement(['bas_sal','fee','commis','bas_sal_comm']),
            'type_pay'		    => $faker->randomElement(['weekly','fortnightly','monthly']),
            'public_min_pay'	=> $faker->boolean(),
            'public_max_pay'	=> $faker->boolean(),
            'min_salary'		=> $faker->randomNumber(4),
            'max_salary'		=> $faker->randomNumber(4),
            'to_travel'		    => $faker->boolean(),
            'change_address'	=> $faker->boolean(),
            'pais_id'		    => 1,
            'state_id'		    => $faker->numberBetween(1,32),
            'mpio_id'		    => $faker->numberBetween(1,2492),
            'lng'                   => $faker->numberBetween(24,8492),
            'lat'                   => $faker->numberBetween(-103,0875),
            'final_comment'		=> $faker->text(500),
            'show_name'		    => $faker->boolean(),
            'show_logo'		    => $faker->boolean(),
            'show_email'		=> $faker->boolean(),
            'show_phone'		=> $faker->boolean(),
            'num_expiration'	=> $numero,
            'date_expiration'	=> $exp,
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
