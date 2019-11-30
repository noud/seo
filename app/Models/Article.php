<?php

namespace App\Models;

class Article extends \App\Models\Base\Article
{
	protected $fillable = [
		'article_body',
		'creative_work_id'
	];
}
