<?php

namespace App\Models;

class SearchActionGoogle extends \App\Models\Base\SearchActionGoogle
{
	protected $fillable = [
		'target',
		'query-input'
	];
}
