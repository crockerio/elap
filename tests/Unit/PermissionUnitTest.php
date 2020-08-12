<?php

namespace Crockerio\ELAP\Tests\Unit;

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\PermissionRole;
use Crockerio\ELAP\Models\Role;
use Crockerio\ELAP\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PermissionUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_role()
    {
        $permission = factory(Permission::class)->create();
        $role = factory(Role::class)->create();

        $link = factory(PermissionRole::class)->create([
            'permission_id' => $permission->id,
            'role_id' => $role->id,
        ]);

        $roles = $permission->roles;

        $this->assertEquals(1, $roles->count());
        $this->assertEquals($role->name, $roles->get(0)->name);
    }

    /** @test */
    public function it_can_have_many_roles()
    {
        $permission = factory(Permission::class)->create();
        $role1 = factory(Role::class)->create();
        $role2 = factory(Role::class)->create();

        $link1 = factory(PermissionRole::class)->create([
            'permission_id' => $permission->id,
            'role_id' => $role1->id,
        ]);

        $link2 = factory(PermissionRole::class)->create([
            'permission_id' => $permission->id,
            'role_id' => $role2->id,
        ]);

        $roles = $permission->roles;

        $this->assertEquals(2, $roles->count());
        $this->assertEquals($role1->name, $roles->get(0)->name);
        $this->assertEquals($role2->name, $roles->get(1)->name);
    }

    /** @test */
    public function it_can_have_no_roles()
    {
        $permission = factory(Permission::class)->create();
        $roles = $permission->roles;
        $this->assertEquals(0, $roles->count());
    }
}
