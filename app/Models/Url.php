<?php

namespace App\Models;

class Url extends \App\Models\Base\Url
{
	protected $fillable = [
		'protocol',
		'host',
		'port',
		'uri'
	];
	
    protected $appends = [
        'name',
	];

	public function getNameAttribute()
	{
		if ($this) {
			$url = $this->protocol . '://' . $this->host;
			if ($this->uri) {
			  $url = $url . '/' . $this->uri;
			}
			return $url;
		}
		return null;
	}
}
