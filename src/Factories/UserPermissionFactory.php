<?php

namespace Crockerio\ELAP\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\UserPermission;
use Crockerio\ELAP\Tests\User;
use Faker\Generator as Faker;

$factory->define(UserPermission::class, function (Faker $faker) {
    $user = factory(User::class)->create();

    return [
        'permission_id' => factory(Permission::class)->create(),
        'user_id' => $user->id,
        'user_type' => get_class($user),
    ];
});
