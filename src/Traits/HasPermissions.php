<?php

namespace Crockerio\ELAP\Traits;

use Crockerio\ELAP\Models\Permission;

trait HasPermissions
{
    public function permissions()
    {
        //return $this->morphToMany(Permission::class, 'user_permission', null, 'user_id', 'permission_id', 'user_type');
        return $this->morphToMany(Permission::class, 'controllable');
    }
}
