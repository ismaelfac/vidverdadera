<?php
use App\User;
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
                
            ]);
        }
    }
}
