<?php
use App\{ User, Member };
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/users.json");
        $users = json_decode($data, true);
        foreach ($users as $value) {
            $member = Member::where('id',$value['member_id'])->where('active',1)->first();
            User::create([
                'name' => $member->fullname,
                'email' => $member->email,
                'password' => bcrypt($value['password']),
                'member_id' => $value['member_id'],
            ]);
        }
    }
}
