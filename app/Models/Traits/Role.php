<?php

namespace App\Models\Traits;

trait Role
{
    public function role()
    {
        return $this->morphOne('App\Models\Role', 'roleable');
    }

    public function scopeNamed($query, $name)
    {
        $query->whereHas('role', function ($query) use ($name) {
            $query->named($name);
        });
    }
}