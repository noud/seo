<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Relations\Relation;

trait MorphMap
{
    protected static function boot()
    {
        static::bootTraits();

        static::loadMorphMap();
    }

    protected static function loadMorphMap()
    {
        Relation::morphMap([
            'breadcrumb_list' => 'App\Models\BreadcrumbList',
            'item_list' => 'App\Models\ItemList',
        ]);
    }
}