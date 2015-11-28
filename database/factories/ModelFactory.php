<?php

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

$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random('123456')),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\Ukm\Ukm::class, function (Faker\Generator $faker) {
    $ukmName = $faker->company;
    return [
        'name' => $ukmName,
        'profile_picture' => 'http://lorempixel.com/200/200',
        'address' => $faker->address,
        'short_description' => $ukmName . ' - ' . $faker->bs,
        'long_description'  => $faker->text,
        'follower_number' => $faker->numberBetween(10, 10000),
    ];
});
