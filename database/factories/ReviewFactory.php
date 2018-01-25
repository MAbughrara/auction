<?php

use Faker\Generator as Faker;

$factory->define(\App\Review::class, function (Faker $faker) {
    return [
//        'creator_id' => $faker->name,
//        'target_id' => $faker->unique()->safeEmail,
//        'comment' => $faker->unique()->numberBetween(min([1910000000]),max([1929999999])),
//        'rate' => $faker->numberBetween(min([1]),max([5]))
    ];
});
