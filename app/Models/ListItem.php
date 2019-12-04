<?php

namespace App\Models;

class ListItem extends \App\Models\Base\ListItem
{
	protected $fillable = [
		'list_id',
		'list_type',
		'position',
		'item_id',
		'item_type'
	];

	public function list()
	{
		return $this->morphTo();
	}
	
	public function item()
	{
		return $this->morphTo();
	}
}
