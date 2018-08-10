<?php
use App\{ Member, ZoneAssigment, MemberPastor };
use Illuminate\Database\Seeder;

class MemberPastorTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/members_pastors.json");
        $zone_assigmements = json_decode($data, true);
        foreach ($zone_assigmements as $value) {
            $member_id = Member::find($value['member_id']);
            $zone_assigment_id = ZoneAssigment::find($value['zone_assigment_id']);
            $zonal_pastors_id = ZoneAssigment::find($value['zonal_pastors_id']); 
            MemberPastor::create([
                'member_id' => $member_id->id,
                'zone_assigment_id' => $zone_assigment_id->id,
                'activation_date_district' => $value['activation_date_district'],
                'zonal_pastors_id' => $zonal_pastors_id->id,
                'activation_date_zonal' => $value['activation_date_zonal'],
                'expiration_date' => $value['expiration_date'],
                'active' => ($value['active'] ? true : false),
            ]);
        }
    }
}
