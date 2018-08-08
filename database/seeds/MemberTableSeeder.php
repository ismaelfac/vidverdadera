<?php
use App\Member;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/members.json");
        $members = json_decode($data, true);
        foreach ($members as $value) {
            //dd($value['code']);
            Member::create([
                
            ]);
        }
    }
}
