<?php

use empleaDos\User;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        $gen = $faker->randomElement(['male','female']);
        if ($gen == 'male') {
            $nombre = $faker->firstNameMale;
        } else {
            $nombre = $faker->firstNameFemale;
        }
        return [
                'name' => $nombre,
                'a_paterno' => $faker->lastName,
                'a_materno' => $faker->lastName,
                'email' => $faker->email,
                'password' =>'secret',//bcrypt(str_random(10))
                'genero' => $gen,
                'birthdate' => $faker->dateTimeBetween('-60 years','now'),
                'type' => $faker->randomElement(['user','company']),
                'remember_token' => str_random(10) 
            ];
    }

    public function createAdmin()
    {
        $this->create([
            'name' => 'Admin',
            'a_paterno' => 'De',
            'a_materno' => 'Página',
            'email' => 'sistemas3@aptoner.com.mx',
            'password' => 'admin',//bcrypt()'admin'
            'genero' => 'male',
            'birthdate' => '2016-01-01',
            'type' => 'root',
            'remember_token' => str_random(10),
        ]);
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(49);
  
    }
}
