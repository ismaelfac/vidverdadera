<?php
use App\Modelsgenerals\Location;
use App\{ LeaderMember, ZoneAssigment };
use Illuminate\Database\Seeder;

class ZonaAssigmentTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/zone_assigments.json");
        $zone_assigmements = json_decode($data, true);
        foreach ($zone_assigmements as $value) {
            $leader_member = LeaderMember::find($value['leader_member_id']);
            $location = Location::find($value['location_id'])->first();
                ZoneAssigment::create([
                    'leader_member_id' => $leader_member->id,
                    'location_id' => $location->id,
                    'activation_date' => $value['activation_date'],
                    'active' => ($value['active'] ? true : false ),
                ]);     
        }
    }
}
