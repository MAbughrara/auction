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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->numberBetween(min([1910000000]),max([1929999999])),
        'password' => $password ?: $password = bcrypt('secret'),
        'created_at' => \Carbon\Carbon::today(),
        'remember_token' => str_random(10),
    ];
});
