<?php

namespace Crockerio\ELAP\Tests\Unit;

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\PermissionRole;
use Crockerio\ELAP\Models\Role;
use Crockerio\ELAP\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PermissionRoleUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_the_associated_permission()
    {
        $permission = factory(Permission::class)->create();
        $role = factory(Role::class)->create();

        $link = factory(PermissionRole::class)->create([
            'permission_id' => $permission->id,
            'role_id' => $role->id,
        ]);

        $this->assertEquals($link->permission->name, $permission->name);
    }

    /** @test */
    public function it_can_get_the_associated_role()
    {
        $permission = factory(Permission::class)->create();
        $role = factory(Role::class)->create();

        $link = factory(PermissionRole::class)->create([
            'permission_id' => $permission->id,
            'role_id' => $role->id,
        ]);

        $this->assertEquals($link->role->name, $role->name);
    }
}
