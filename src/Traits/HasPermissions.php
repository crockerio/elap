<?php

namespace Crockerio\ELAP\Traits;

use Crockerio\ELAP\Models\Permission;

trait HasPermissions
{
    public function permissions()
    {
        return $this->morphToMany(Permission::class, 'user');
    }
}
