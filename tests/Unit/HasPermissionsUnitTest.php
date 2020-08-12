<?php

namespace Crockerio\ELAP\Tests\Unit;

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\Controllable;
use Crockerio\ELAP\Tests\TestCase;
use Crockerio\ELAP\Tests\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HasPermissionsUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_object_with_the_trait_can_get_its_permissions()
    {
        $user = factory(User::class)->create();
        $permission = factory(Permission::class)->create();

        $link = factory(Controllable::class)->create([
            'permission_id' => $permission->id,
            'controllable_id' => $user->id,
            'controllable_type' => User::class,
        ]);

        $permissions = $user->permissions;

        $this->assertEquals(1, $permissions->count());
        $this->assertEquals($permission->name, $permissions->get(0)->name);
    }
}
