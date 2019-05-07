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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Company::class, function (Faker $faker) {


    return [
        'name' => $faker->word,
        'logo' => $faker->randomElement(['1.png','2.png','3.png','4.png','5.png']),
    ];
});


$factory->define(App\Terminal::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'company_id' => App\Company::all()->random()->id,
    ];
});
