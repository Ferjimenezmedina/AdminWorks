<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->truncateTables([
            'users',
            'password_resets',
            'personal_datas',
            'academic_datas',
            'aca_dat_exts',
            'languages',
            'cadre_profiles',
            'categories',
            'subcategories',
            'asig_categos',
            'work_experiences',
            'ofimatics',
            'softwares',
            'abilities',
            'services',
            'companies',
            'vacants',
            'languajes_vacants',
            'benefits',
            'demands',
            'postulations',
            'leaflets',
        ]);

       $this->call(UserTableSeeder::class);
        $this->call(PersonalDataTableSeeder::class);
        $this->call(AcademicDataTableSeeder::class);
        $this->call(AcademicDataExtraTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(CadreProfileTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);
        $this->call(AsigCategoTableSeeder::class);
        $this->call(WordExperienceTableSeeder::class);
        $this->call(OfimaticTableSeeder::class);
        $this->call(SoftwareTableSeeder::class);
        $this->call(AbilityTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(VacantTableSeeder::class);
        $this->call(LanguageVacantTableSeeder::class);
        $this->call(BenefitTableSeeder::class);
        $this->call(DemandTableSeeder::class);
        $this->call(PostulationTableSeeder::class);
        $this->call(LeafletTableSeeder::class);

        Model::reguard();//
    }

    public function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);
        foreach ($tables as  $table) 
        {
           DB::table($table)->truncate();
        }

        $this->checkForeignKeys(true);
    }

    public function checkForeignKeys($check)
    {
        $check = $check ? '1' : '0' ;
        DB::statement('SET FOREIGN_KEY_CHECKS = ' . $check);
    }
}
