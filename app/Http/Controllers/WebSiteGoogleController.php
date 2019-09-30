<?php

namespace App\Http\Controllers;

use App\Models\WebSiteGoogle;
use App\Events\MyEvent;

class WebSiteGoogleController extends Controller
{
    public function field(WebSiteGoogle $webSiteGoogle, String $field)
    {
        return $webSiteGoogle->$field ?? 'not found';
    }
}
