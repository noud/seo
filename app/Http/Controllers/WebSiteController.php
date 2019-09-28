<?php

namespace App\Http\Controllers;

use App\Models\WebSite;
use App\Events\MyEvent;

class WebSiteController extends Controller
{
    public function field(WebSite $webSite, String $field)
    {
        return $webSite->$field ?? 'not found';
    }
}
