<?php

namespace Crockerio\ELAP\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, PermissionRole::class);
    }

    //public function users()
    //{
    //    return $this->morphedByMany();
    //}
}
