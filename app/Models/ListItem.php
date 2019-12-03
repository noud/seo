<?php

namespace App\Models;

class ListItem extends \App\Models\Base\ListItem
{
	protected $fillable = [
		'item_list_id',
		'position',
		'itemable_id',
		'itemable_type'
	];

	public function itemable()
	{
		return $this->morphTo();
	}
}
