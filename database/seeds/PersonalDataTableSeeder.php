<?php

use empleaDos\Entities\PersonalData;
use Faker\Generator;

class PersonalDataTableSeeder extends BaseSeeder
{
	public function getModel()
    {
        return new PersonalData();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'estado_civil' => $faker->randomElement(['Soltero (a)','Casado (a)','Divorsiado (a)','Union Libre']),
            'rfc' => $faker->swiftBicNumber,
            'curp' => $faker->swiftBicNumber,
            'pais_id' => 1,
            'state_id' => $faker->numberBetween(1,32),//rand(1,32)
            'mpio_id' => $faker->numberBetween(1,2492),
            'calle' => $faker->streetName,
            'no_ext' => $faker->buildingNumber,
            'no_int' => $faker->buildingNumber,
            'colonia' => $faker->streetName,
            'codigo_postal' => $faker->postcode,
            'tipo_tel1' => $faker->randomElement(['Celular','Casa','Oficina']),
            'telefono1' => $faker->phoneNumber,
            'tipo_tel2' => $faker->randomElement(['Celular','Casa','Oficina']),
            'telefono2' => $faker->phoneNumber,
            'licencia' => $faker->boolean,
            'tipo_licencia' => $faker->randomElement(['A','B','C','D']),
            'disp_veiculo' => $faker->boolean,
            'disp_cam_res' => $faker->boolean,
            'disp_viajar' => $faker->boolean,
            'discapacidad' => $faker->boolean,
            'situcacion_ac' => $faker->randomElement([
                'Desempleado','Estoy buscando trabajo','Estoy trabajando actualmente',
                    'Tengo trabajo pero puedo escuchar ofertas','No tengo interés en un nuevo trabajos']),
            'puesto_des' =>$faker->catchPhrase,
            'req_salary' => $faker->randomElement([
                'Menos de $6,000', '$6,000 - $8,000', '$8,000 - $12,000',
                '$12,000 - $16,000','$16,000 - $20,000', '$20,000 - $25,000', 'Más de $25,000',
            ]),
            'salary_type' => $faker->randomElement(['Quincena','Mensual', 'Honorarios',]),
            'des_salary' => $faker->randomElement([
                'Menos de $6,000', '$6,000 - $8,000', '$8,000 - $12,000',
                '$12,000 - $16,000','$16,000 - $20,000', '$20,000 - $25,000', 'Más de $25,000',
            ]),
            'salary_type_des' => $faker->randomElement(['Quincena','Mensual', 'Honorarios',]),
            'img_user' => 'cuenta.png',
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMultiple(20);
    }
}
