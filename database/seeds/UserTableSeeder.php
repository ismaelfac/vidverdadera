<?php
use App\{ User, Member };
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/users.json");
        $users = json_decode($data, true);
        foreach ($users as $value) {
            //dd($value['code']);
            User::create([
                'name' => strtoupper($value['name']),
                'email' => strtoupper($value['email']),
                'password' => bcrypt($value['password']),
                'member_id' => $value['member_id'],
            ]);
        }
    }
}
