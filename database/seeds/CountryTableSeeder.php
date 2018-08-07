<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Modelsgenerals\Country::create([
            'code' => '14',
            'description' => 'Colombia',
            'nationality' => 'Colombiana' 
        ]);
    }
}
