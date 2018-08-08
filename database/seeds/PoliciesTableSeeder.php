<?php
use App\{ Leader, Policies };
use Illuminate\Database\Seeder;

class PoliciesTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/policies.json");
        $policies = json_decode($data, true);
        foreach ($policies as $value) {
            $leaders = Leader::where('id',$value['leader_id'])->first();
                Policies::create([
                    'description' => $value['description'],
                    'leader_id' => $leaders->id,
                ]);     
        }
    }
}
