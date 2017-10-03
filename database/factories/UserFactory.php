<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'id' => rand(10000000000, 20000000000),
        'name' => $faker->name,
        'gender' => (rand(0, 1)) ? 'male' : 'female',
        'avatar' => $faker->imageUrl(500, 500, 'people'),
        'avatar_original' => $faker->imageUrl(500, 500, 'people'),
        'token' => ""
    ];
});

$factory->define(App\Compliment::class, function (Faker $faker) {

    return [
        'to_id' => rand(10000000000, 20000000000),
        'from_id' => rand(10000000000, 20000000000),
        'message' => $faker->sentence(7)
    ];
});