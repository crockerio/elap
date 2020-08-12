<?php

namespace Crockerio\ELAP\Tests\Unit;

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\UserPermission;
use Crockerio\ELAP\Tests\TestCase;
use Crockerio\ELAP\Tests\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserPermissionUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_the_associated_permission()
    {
        $permission = factory(Permission::class)->create();

        $link = factory(UserPermission::class)->create([
            'permission_id' => $permission->id,
        ]);

        $this->assertEquals($permission->name, $link->permission->name);
    }

    /** @test */
    public function it_can_get_the_associated_user()
    {
        $user = factory(User::class)->create();

        $link = factory(UserPermission::class)->create([
            'user_id' => $user->id,
            'user_type' => User::class,
        ]);

        $this->assertEquals($user->name, $link->user->name);
        $this->assertEquals(User::class, $link->user_type);
    }
}
