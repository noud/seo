<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\MorphMap;
use Spatie\SchemaOrg\Schema;

class ItemList extends \App\Models\Base\ItemList
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
                $url = $listItem->item->article->creative_work->thing->main_entity_of_page;
                $listItems[] = Schema::ListItem()
                    ->position($listItem->position)
                    // Thing
                    ->url($url)
                ;
            }
        }

        return $this->getSchemaOrgNodeIdentifierSchemaAttribute('ItemList', true)
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
