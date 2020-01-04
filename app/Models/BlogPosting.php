<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use App\Models\Traits\Slug;
use Spatie\SchemaOrg\Schema;

class BlogPosting extends \App\Models\Base\BlogPosting
{
    use JsonLd;
    use sameAs;
    use Slug;

    protected $fillable = [
        'article_id'
    ];
	
	public function generateSlug() {
		$urlParts = explode('/', $this->url);
		end($urlParts);
		return prev($urlParts);
	}

    public function getSchemaOrgSchemaAttribute()
    {
        $author = null;
        if ($this->article->creative_work->author) {
            $author = Schema::Person()
                ->name($this->article->creative_work->author->name)
                // ->givenName($this->article->creative_work->author->first_name)
                ->familyName($this->article->creative_work->author->surname)
                ->email(strlen($this->article->creative_work->author->email) != false ? $this->article->creative_work->author->email : null)
                ->telephone($this->article->creative_work->author->tel)
                // Thing
                // ->setProperty('sameAs', $this->getSchemaOrgsameAs())
            ;
        }

        $publisher = null;
        if ($this->article->creative_work->publisher) {
            $logo = Schema::ImageObject()
                ->url($this->article->creative_work->publisher->logo);
            $publisher = Schema::Organization()
                // ->employee($this->organization->getSchemaOrgEmployee())
                ->logo($logo)
                ->telephone($this->article->creative_work->publisher->telephone)
                // Thing
                ->name($this->article->creative_work->publisher->thing->name)
                ->url($this->article->creative_work->publisher->thing->url)    // @todo different
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
            ->description($this->article->creative_work->thing->description)    // optional
            ->mainEntityOfPage($this->url)
            ->setProperty('image', $this->article->creative_work->thing->getSchemaOrgimage())
        ;
    }
	
	public function getUrlAttribute()
	{
		return $this->article->creative_work->thing->main_entity_of_page;
	}
    
    public function getSchemaOrgSchema()
    {
        return $this->getSchemaOrgSchemaAttribute();
    }
}
