<?php
use App\Modelsgenerals\Country;
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
        $data = file_get_contents("database/Queries/countries.json");
        $countries = json_decode($data, true);
        foreach ($countries as $value) {
            //dd($value['code']);
            Country::create([
                'code' => $value['code'],
                'description' => $value['description'],
                'nationality' => $value['nationality'],
                'short_name' => $value['short_name'] 
            ]);
        }
    }
}
