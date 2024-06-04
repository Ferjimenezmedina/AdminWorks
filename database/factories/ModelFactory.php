<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(empleaDos\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'password' =>bcrypt('secret'),//bcrypt(str_random(10))
	    	'type' => $faker->randomElement(['user','company']),
        'remember_token' => str_random(10)
    ];
});

$factory->define(empleaDos\Entities\PersonData::class, function (Faker\Generator $faker) {
    return [
        'usuario_id' => $faker->numberBetween($min = 1, $max = 49),
        'name' =>$faker->name,
	    	'a_paterno' => $faker->lastName,
        'a_materno' => $faker->lastName,
        'fecha_nacimiento' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = 'now'),
        'genero' => $faker->randomElement(['male','female']),
        'estado_civil' => $faker->randomElement(['soltero','casado','divorciado','unionlibre']),
        'rfc' => $faker->swiftBicNumber,
        'curp' => $faker->swiftBicNumber,
        'pais_id' => 1,
        'estado_id' => $faker->numberBetween($min = 1, $max = 32),
        'municipio_id' => $faker->numberBetween($min = 1, $max = 10),
        'localidad_id' => $faker->numberBetween($min = 1, $max = 10),
        'calle' => $faker->streetName,
        'no_ext' => $faker->buildingNumber,
        'no_int' => $faker->buildingNumber,
        'colonia' => $faker->streetName,
        'codigo_postal' => $faker->postcode,
        'tipo_tel1' => $faker->randomElement(['cel','fijo','oficina']),
        'telefono1' => $faker->tollFreePhoneNumber,
        'tipo_tel2' => $faker->randomElement(['cel','fijo','oficina']),
        'telefono2' => $faker->tollFreePhoneNumber,
        'licencia' => $faker->boolean,
        'tipo_licencia' => $faker->randomElement(['A','B','C','C']),
        'dipone_veiculo' => $faker->boolean,
        'discapacidad' => $faker->boolean,
        'img_user' => 'cuenta.png',
    ];
});
