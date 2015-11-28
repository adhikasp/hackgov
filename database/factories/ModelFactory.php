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
        'founder_id' => $faker->numberBetween(1, 20),
        'address' => $faker->address,
        'short_description' => $ukmName . ' - ' . $faker->bs,
        'long_description'  => $faker->text,
        'follower_number' => $faker->numberBetween(10, 10000),

        // Kiri atas   -7.660916, 110.225604
        // Kanan bawah -8.026834, 110.574648
        'lat' => $faker->randomFloat(6, -7.660916, -8.026834),
        'lng' => $faker->randomFloat(6, 110.225604, 110.574648),
    ];
});



$factory->define(App\Model\Ukm\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->bs,
        'body' => $faker->paragraph(5),
        'user_id' => $faker->numberBetween(1, 20),
        'ukm_id'  => $faker->numberBetween(1, 40)
    ];
});