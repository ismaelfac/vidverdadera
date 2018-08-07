<?php
use App\Modelsgenerals\{ Departament, Country };
use Illuminate\Database\Seeder;

class DepartamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament::create([
            'code' => '08',
            'description' => 'ATLANTICO',
            'short_name' => 'ATL',
            'country_id' => factory(Departament::class, 1)->create()->each(function(Departament $departament){
                                $departament->country()
                                            ->save(factory(Country::class)->make());
                            });
        ]);
    }
}
