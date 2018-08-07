<?php
use App\Modelsgenerals\Civilstatus;
use Illuminate\Database\Seeder;

class CivilstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $civilstatus = ['Soltero', 'Casado', 'Unión Libre', 'Divorsiado'];
        foreach ($civilstatus as $value) {
            Civilstatus::create([
            'description' => $value
            ]);
        }
       
    }
}
