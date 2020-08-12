<?php

namespace Crockerio\ELAP\Tests\Unit;

use Crockerio\ELAP\Models\Permission;
use Crockerio\ELAP\Models\Controllable;
use Crockerio\ELAP\Tests\TestCase;
use Crockerio\ELAP\Tests\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllableUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_the_associated_permission()
    {
        $permission = factory(Permission::class)->create();

        $link = factory(Controllable::class)->create([
            'permission_id' => $permission->id,
        ]);

        $this->assertEquals($permission->name, $link->permission->name);
    }

    /** @test */
    public function it_can_get_the_associated_user()
    {
        $user = factory(User::class)->create();

        $link = factory(Controllable::class)->create([
            'controllable_id' => $user->id,
            'controllable_type' => User::class,
        ]);

        $this->assertEquals($user->name, $link->controllable->name);
        $this->assertEquals(User::class, $link->controllable_type);
    }
}
