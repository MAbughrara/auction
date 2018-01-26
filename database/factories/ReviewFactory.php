<?php

use Faker\Generator as Faker;

$factory->define(\App\Review::class, function (Faker $faker) {
    $users = \App\User::all()->pluck('id')->toArray();
    return [
        'creator_id' => $faker->randomElement($users),
        'target_id' => $faker->randomElement($users),
        'comment' => $faker->sentence,
        'rate' => $faker->numberBetween(min([1]),max([5]))
    ];
});
