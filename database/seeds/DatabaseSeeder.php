<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChurchTableSeeder::class);
        $this->call(CivilstatusTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(DepartamentTableSeeder::class);
        $this->call(MunicipalityTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(NeighborhoodTableSeeder::class);
        $this->call(IdentificationTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(LeaderTableSeeder::class);
        $this->call(PoliciesTableSeeder::class);
    }
}
