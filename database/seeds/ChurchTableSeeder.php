<?php
use App\Modelsgenerals\Church;
use Illuminate\Database\Seeder;

class ChurchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Church::create([
            'description' => 'Ministerio Internacional Apostolico Vid Verdadera'
        ]);
    }
}
