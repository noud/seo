<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use Spatie\SchemaOrg\Schema;

class ItemList extends \App\Models\Base\ItemList
{
	use JsonLd;

	public function getSchemaOrgSchemaAttribute()
	{
        $listItems = [];
        foreach($this->list_items()->orderBy('position','asc')->get() as $listItem) {
            $item = $listItem->itemable;
            if ($item) {
                // @todo this should be morphable
                $url = $listItem->itemable->article->creative_work->thing->main_entity_of_page;
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
		return $this->hasMany(\App\Models\ListItem::class, 'item_list_id', 'id');
	}
}
