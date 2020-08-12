<?php

namespace Crockerio\ELAP\Tests\Unit;

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\PermissionRole;
use Crockerio\ELAP\Models\Role;
use Crockerio\ELAP\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoleUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_permission()
    {
        $role = factory(Role::class)->create();
        $permission = factory(Permission::class)->create();

        $link = factory(PermissionRole::class)->create([
            'permission_id' => $permission->id,
            'role_id' => $role->id,
        ]);

        $permissions = $role->permissions;

        $this->assertEquals(1, $permissions->count());
        $this->assertEquals($permission->name, $permissions->get(0)->name);
    }

    /** @test */
    public function it_can_have_many_permissions()
    {
        $role = factory(Role::class)->create();
        $permission1 = factory(Permission::class)->create();
        $permission2 = factory(Permission::class)->create();

        $link1 = factory(PermissionRole::class)->create([
            'permission_id' => $permission1->id,
            'role_id' => $role->id,
        ]);

        $link2 = factory(PermissionRole::class)->create([
            'permission_id' => $permission2->id,
            'role_id' => $role->id,
        ]);

        $permissions = $role->permissions;

        $this->assertEquals(2, $permissions->count());
        $this->assertEquals($permission1->name, $permissions->get(0)->name);
        $this->assertEquals($permission2->name, $permissions->get(1)->name);
    }

    /** @test */
    public function it_can_have_no_permissions()
    {
        $role = factory(Role::class)->create();
        $permissions = $role->permissions;
        $this->assertEquals(0, $permissions->count());
    }
}
