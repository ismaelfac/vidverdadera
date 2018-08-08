<?php
use App\Modelsgenerals\{ Location, Municipality };
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/localities.json");
        $localities = json_decode($data, true);
        foreach ($localities as $value) {
            Location::create([
                'description' => $value,
                'short_name' => $value,
                'id_municipality' => factory(Location::class, 1)->create()->each(function(Location $location){
                                $location->country()
                                            ->save(factory(Municipality::class)->make());
                            });
            ]);
        }
    }
}
