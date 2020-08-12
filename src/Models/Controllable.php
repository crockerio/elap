<?php

namespace Crockerio\ELAP\Models;

use Illuminate\Database\Eloquent\Model;

class Controllable extends Model
{
    public function controllable()
    {
        return $this->morphTo();
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
