<?php

namespace Crockerio\ELAP\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\Controllable;
use Crockerio\ELAP\Tests\User;
use Faker\Generator as Faker;

$factory->define(Controllable::class, function (Faker $faker) {
    $user = factory(User::class)->create();

    return [
        'permission_id' => factory(Permission::class)->create(),
        'controllable_id' => $user->id,
        'controllable_type' => get_class($user),
    ];
});

