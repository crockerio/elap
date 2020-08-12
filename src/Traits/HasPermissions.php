<?php

namespace Crockerio\ELAP\Traits;

use Crockerio\ELAP\Models\Permission;
use Illuminate\Database\Eloquent\Model;

trait HasPermissions
{
    public function permissions()
    {
        return $this->morphToMany(Permission::class, 'user');
    }
}
