<?php

namespace App\Models;

use App\Models\BlogPosting;
use App\Models\ItemList;
use Spatie\SchemaOrg\Schema;

class Carousel extends ItemList
{
	public function getSchemaOrgSchemaAttribute()
	{
        $listItems = [];
        foreach($this->list_items()->orderBy('position','asc')->get() as $listItem) {
            $item = $listItem->itemable;
            if ($item) {
                $author = null;
                if ($item->article->creative_work->author) {
                    $author = Schema::Person()
                        ->name($item->article->creative_work->author->name)
                        // ->givenName($item->article->creative_work->author->first_name)
                        ->familyName($item->article->creative_work->author->surname)
                        ->email($item->article->creative_work->author->email)
                        ->telephone($item->article->creative_work->author->tel)
                        // Thing
                        // ->setProperty('sameAs', $item->getSchemaOrgsameAs())
                    ;
                }
        
                $publisher = null;
                if ($item->article->creative_work->publisher) {
                    $logo = Schema::ImageObject()
                        ->url($item->article->creative_work->publisher->logo);
                    $publisher = Schema::Organization()
                        // ->employee($this->organization->getSchemaOrgEmployee())
                        ->logo($logo)
                        ->telephone($item->article->creative_work->publisher->telephone)
                        // Thing
                        ->name($item->article->creative_work->publisher->thing->name)
                        ->url($item->article->creative_work->publisher->thing->url)	// @todo different
                    ;
                }
                $blogPosting = Schema::BlogPosting()
                    // Article
                    // ->articleBody($item->article->article_body)
                    // CreativeWork
                    ->datePublished($item->article->creative_work->date_published)
                    ->dateModified($item->article->creative_work->date_modified)	// optional
                    ->headline($item->article->creative_work->headline)
                    ->author($author)
                    ->publisher($publisher)
                    // Thing
                    // ->description($item->article->creative_work->thing->description)	// optional
                    ->setProperty('image', $item->article->creative_work->thing->getSchemaOrgimage())
                    ->mainEntityOfPage($item->article->creative_work->thing->main_entity_of_page)	// optional
                    ->url($item->article->creative_work->thing->url)
                ;

                // @todo this should be morphable
                $url = $listItem->itemable->article->creative_work->thing->main_entity_of_page;
                $listItems[] = Schema::ListItem()
                    ->position($listItem->position)
                    ->item($blogPosting)
                ;
            }
        }

        return $this->getSchemaOrgNodeIdentifierSchemaAttribute('ItemList', true)
            ->itemListElement($listItems)
		;
	}
}
