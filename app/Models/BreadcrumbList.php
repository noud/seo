<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\MorphMap;
use Spatie\SchemaOrg\Schema;

class BreadcrumbList extends \App\Models\Base\BreadcrumbList
{
	use JsonLd;
    use MorphMap;

	public function getSchemaOrgSchemaAttribute()
	{
        $listItems = [];
        foreach($this->list_items()->orderBy('position','asc')->get() as $listItem) {
            $item = $listItem->item;
            if ($item) {
                // @todo this should be morphable
                $url = $item->url;
                $listItems[] = Schema::ListItem()
                    ->position($listItem->position)
                    // Thing
                    ->name($item->name)
                    ->url($url)
                ;
            }
        }

        return $this->getSchemaOrgNodeIdentifierSchemaAttribute('BreadcrumbList', true)
            ->itemListElement($listItems)
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
    }
    
    public function list_items()
	{
        return $this->morphMany(\App\Models\ListItem::class, 'list');
	}
}
