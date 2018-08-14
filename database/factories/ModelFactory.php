<?php
use App\Modelsgenerals\{ Identification, Neighborhood, Municipality, Departament, Country, Civilstatus, Church };
use App\Member, Leader, LeaderMember, MemberPastor;
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
        'member_id' => '2',
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Member::class, function (Faker\Generator $faker) {
    dd($faker->name);
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
        'neighborhood_id' => function () {
            return factory(Neighborhood::class)->create()->id;
        },
        'municipality_id' => function () {
            return factory(Municipality::class)->create()->id;
        },
        'departament_id' => function () {
            return factory(Departament::class)->create()->id;
        },
        'country_id' => function () {
            return factory(Country::class)->create()->id;
        },
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'civilStatus_id' => function () {
            return factory(Civilstatus::class)->create()->id;
        },
        'wedding_anniversary' => $faker->date($format = 'Y-m-d', $max = 'now'), 
        'active' => 1,
        'is_leaders' => 1,
        'church_id' => function () {
            return factory(Church::class)->create()->id;
        },
    ];
});
$factory->define(App\Leader::class, function (Faker\Generator $faker) {
    return [
        'description' = $faker->sentence,
    ];
});
$factory->define(Identification::class, function (Faker\Generator $faker) {
    return [
        'description' => 'Cedula de Ciudadania',
        'shortName' => 'cc'
    ];
});
$factory->define(Civilstatus::class, function (Faker\Generator $faker) {
    return [
        'description' => 'Soltero'
    ];
});
$factory->define(Church::class, function (Faker\Generator $faker) {
    return [
        'description' => 'Ministerio Vid Verdadera Central'
    ];
});
$factory->define(Neighborhood::class, function (Faker\Generator $faker) {
    return [
        'code' => '001',
        'description' => 'Delicias',
        'municipality_id' => function () {
            return factory(Municipality::class)->create()->id;
        }
    ];
});
$factory->define(Municipality::class, function (Faker\Generator $faker) {
    return [
        'code' => '004',
        'description' => 'Barranquilla',
        'departament_id' => function () {
            return factory(Departament::class)->create()->id;
        }
    ];
});
$factory->define(Departament::class, function (Faker\Generator $faker) {
    return [
        'code' => '08',
        'description' => 'ATLANTICO',
        'short_name' => 'ATL',
        'country_id' => function () {
            return factory(Country::class)->create()->id;
        }
    ];
});
$factory->define(Country::class, function (Faker\Generator $faker) {
    return [
        'code' => '08',
        'description' => 'Colombia',
        'nationalities' => 'Colombiana'
    ];
});

