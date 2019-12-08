<?php

namespace App\Http\Controllers;

use App\Models\LocalBusiness;
use App\Events\MyEvent;

class LocalBusinessController extends Controller
{
    public function field(LocalBusiness $localBusiness, String $field)
    {
        return $localBusiness->$field ?? 'not found';
    }
}
