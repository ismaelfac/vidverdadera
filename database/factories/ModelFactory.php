<?php
use App\ModelsGenerals\{ Identification, Neighborhood, Municipality, Departament, Country, CivilStatus };
use App\ { Leader, DistrictPastors };
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'member_id' => function () {
            return factory(App\Member::class)->create()->id;
        },
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Member::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastname,
        'dni' => $faker->randomDigit,
        'type_dni' => function () {
            return factory(Identification::class)->create()->id;
        },
        'phone' => $faker->phoneNumber,
        'landline' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'neighborhood' => function () {
            return factory(Neighborhood::class)->create()->id;
        },
        'municipality' => function () {
            return factory(Municipality::class)->create()->id;
        },
        'departament' => function () {
            return factory(Departament::class)->create()->id;
        },
        'country' => function () {
            return factory(Country::class)->create()->id;
        },
        'nationality' => function () {
            return factory(Nationality::class)->create()->id;
        },
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'civil_status' => function () {
            return factory(CivilStatus::class)->create()->id;
        },
        'wedding_anniversary' => $faker->date($format = 'Y-m-d', $max = 'now'), 
        'is_leaders' => str_random(1),
    ];
});

$factory->define(App\Leader::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'is_deacon' => str_random(1),
        'is_oldMan' => str_random(1),
        'is_cult_Pastor' => str_random(1),
        'is_interimPastor' => str_random(1),
        'is_ordainedPastor' => str_random(1),
        'is_zonalPastor' => str_random(1),
        'is_districtPastor' => str_random(1),
        'is_teacherChildren' => str_random(1),
        'is_dissimulatedTeacher' => str_random(1),
        'is_evangelist' => str_random(1),
        'is_praise' => str_random(1),
        'is_coPastor' => str_random(1),
        'member_id' => function () {
            return factory(App\Member::class)->create()->id;
        }
    ];
});