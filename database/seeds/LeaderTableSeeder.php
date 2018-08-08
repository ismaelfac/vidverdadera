<?php
use App\{ Leader, Member };
use Illuminate\Database\Seeder;

class LeaderTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/leaders.json");
        $leaders = json_decode($data, true);
        foreach ($leaders as $value) {
            Leader::create([
                'description' => $value['description'],
                'short_name' => $value['short_name']
            ]);
        }
    }
}
