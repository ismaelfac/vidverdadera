<?php
use App\{ Leader, Member, LeaderMember };
use Illuminate\Database\Seeder;

class LeadersMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/leader_member.json");
        $zone_assigmements = json_decode($data, true);
        foreach ($zone_assigmements as $value) {
            $leader_id = Leader::find($value['leader_id'])->first();
            $member_id = Member::find($value['leader_id'])->first();
            LeaderMember::create([
                'leader_id' => $leader_id->id,
                'member_id' => $member_id->id,
                'appointment_date' => $value['appointment_date'],
                'expiration_date' => $value['expiration_date'],
                'active' => ($value['active'] ? true : false),
            ]);
        }
    }
}
