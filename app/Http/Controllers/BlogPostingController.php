<?php

namespace App\Http\Controllers;

use App\Models\BlogPosting;
use App\Events\MyEvent;

class BlogPostingController extends Controller
{
    public function field(BlogPosting $blogPosting, String $field)
    {
        return $blogPosting->$field ?? 'not found';
    }
}
