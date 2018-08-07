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
        User::create([
            'name' => 'ISMAEL LASTRE ALVAREZ',
            'email' => 'ismaelfac@gmail.com',
            'password' => bcrypt('BrwQ12-123')
            'member_id' => factory(User::class)->create()->each(function(User $user){
                $user->member()->attach()
            });
        ]);
    }
}
