<?php

namespace App\Models;

class PotentialActionGoogle extends \App\Models\Base\PotentialActionGoogle
{
	protected $fillable = [
		'google_web_site',
		'google_search_action_id'
	];
}
