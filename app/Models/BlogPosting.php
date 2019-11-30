<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\image;
use App\Models\Traits\sameAs;
use Spatie\SchemaOrg\Schema;

class BlogPosting extends \App\Models\Base\BlogPosting
{
	use JsonLd;
	use image;
	use sameAs;

	protected $fillable = [
		'article_id'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$author = null;
		if ($this->article->creative_work->author) {
			// dump($this->article->creative_work->author);
			$author = Schema::Person()
				->name($this->article->creative_work->author->name)
				// ->givenName($this->article->creative_work->author->first_name)
				->familyName($this->article->creative_work->author->surname)
				->email($this->article->creative_work->author->email)
				->telephone($this->article->creative_work->author->tel)
				// Thing
				// ->setProperty('sameAs', $this->getSchemaOrgsameAs())
			;
		}

		$publisher = null;
		if ($this->article->creative_work->publisher) {
			$logo = Schema::ImageObject()
				->url($this->article->creative_work->publisher->logo);
			// dd($this->article->creative_work->publisher);
			$publisher = Schema::Organization()
				// ->employee($this->organization->getSchemaOrgEmployee())
				->logo($logo)
				->telephone($this->article->creative_work->publisher->telephone)
				// Thing
				->url($this->article->creative_work->publisher->thing->url)	// @todo different
				->name($this->article->creative_work->publisher->thing->name)
			;
		}

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('BlogPosting', true)
			// Article
			->articleBody($this->article->article_body)
			// CreativeWork
			->datePublished($this->article->creative_work->date_published)
			->dateModified($this->article->creative_work->date_modified)
			->headline($this->article->creative_work->headline)
			->author($author)
			->publisher($publisher)
			// Thing
			->mainEntityOfPage($this->article->creative_work->thing->main_entity_of_page)
			->setProperty('image', $this->getSchemaOrgimage())
		;
	}
	
	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
