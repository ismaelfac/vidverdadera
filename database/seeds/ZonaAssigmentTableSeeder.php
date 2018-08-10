<?php
use App\Modelsgenerals\Location;
use App\LeaderMember;
use Illuminate\Database\Seeder;

class ZonaAssigmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/zone_assigments.json");
        $zone_assigmements = json_decode($data, true);
        foreach ($zone_assigmements as $value) {
            $leader_member = LeaderMember::where('id',$value['leader_member'])->first();
            $location = Location::where('id',$value['location_id'])->first();
                ZoneAssigment::create([
                    'leader_member' => $leader_member->id,
                    'location_id' => $location->id,
                    'activation_date' => $value['activation_date'],
                    'ative' => ($value['active'] ? true : false ),
                ]);     
        }
    }
}
