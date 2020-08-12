<?php

namespace Crockerio\ELAP\Models;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    public function user()
    {
        return $this->morphTo();
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
