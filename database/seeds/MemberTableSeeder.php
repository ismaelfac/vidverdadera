<?php
use App\Member;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents("database/Queries/members.json");
        $members = json_decode($data, true);
        foreach ($members as $value) {
            //dd($value);
            Member::create([
                'first_name'      => strtoupper($value['first_name']),
                'last_name'       => strtoupper($value['last_name']),
                'dni'             => $value['dni'],
                'type_dni'        => $value['type_dni'],
                'phone'           => $value['phone'],
                'landline'        => $value['landline'],
                'email'           => mb_strtoupper($value['email']),
                'address'         => strtoupper($value['address']),
                'latitude'        => ($value['latitude']? $value['latitude'] : null),
                'longitude'       => ($value['longitude'] ? $value['longitude'] : null),
                'neighborhood_id' => $value['neighborhood_id'],
                'location_id'     => $value['location_id'],
                'municipality_id' => $value['municipality_id'],
                'departament_id'  => $value['departament_id'],
                'country_id'      => $value['country_id'],
                'birthdate'       => $value['birthdate'],
                'date_baptism'    => $value['date_baptism'],
                'admission_church'=> $value['admission_church'],
                'civilstatus_id'  => $value['civilstatus_id'],
                'wedding_anniversary' => ($value['wedding_anniversary']? $value['wedding_anniversary']: null),
                'active'         => ($value['active'] ? true : false ),
                'church_id'      => $value['church_id']
            ]);
        }
    }
}
