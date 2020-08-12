<?php

namespace Crockerio\ELAP\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Crockerio\ELAP\Models\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
