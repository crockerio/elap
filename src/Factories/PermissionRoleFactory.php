<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\PermissionRole;
use Crockerio\ELAP\Models\Role;
use Faker\Generator as Faker;

$factory->define(PermissionRole::class, function (Faker $faker) {
    return [
        'permission_id' => factory(Permission::class)->create()->id,
        'role_id' => factory(Role::class)->create()->id,
    ];
});
