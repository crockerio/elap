<?php

namespace Crockerio\ELAP\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Crockerio\ELAP\Models\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});