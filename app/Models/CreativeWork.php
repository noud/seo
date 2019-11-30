<?php

namespace App\Models;

class CreativeWork extends \App\Models\Base\CreativeWork
{
	protected $fillable = [
		'author_id',
		'publisher_id',
		'date_modified',
		'date_published',
		'headline',
		'thing_id'
	];

	public function author()
	{
		return $this->belongsTo(\App\Models\Person::class, 'author_id');
	}

	public function publisher()
	{
		return $this->belongsTo(\App\Models\Organization::class, 'publisher_id');
	}
}
