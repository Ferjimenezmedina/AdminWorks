<?php

use empleaDos\Entities\Company\Company;
use Faker\Generator;

class CompanyTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Company();
    }
    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
            'user_id'           => $this->getRandom('User')->id,
            'nombre'            => $faker->company,
            'razon_social'      => $faker->company.' S.A. de C.V.',
            'rfc'               => $faker->swiftBicNumber,
            'domicilio'         => $faker->streetAddress,
            'no_exterior'       => $faker->buildingNumber,
            'colonia'           => $faker->streetName,
            'codigo_postal'     => $faker->postcode,
            'telefono'          => $faker->phoneNumber,
            'pagina_web'        => $faker->domainName,
            'pais_id'		    => 1,
            'state_id'		    => $faker->numberBetween(1,32),
            'mpio_id'		    => $faker->numberBetween(1,2492),
            'ciudad'            => $faker->city,
            'category_id'       => $this->getRandom('Category')->id,
            'tipo_contrata_emp' => $faker->randomElement(['Empleador Directo','Servicios Temporales','De Reclutamiento']),
            'presentacion'      => $faker->text(400),
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
