<?php

namespace Crockerio\ELAP\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, PermissionRole::class);
    }

    }
