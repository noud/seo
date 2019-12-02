<?php

namespace App\Http\Controllers;

use App\Models\ItemList;
use App\Events\MyEvent;

class CarouselSummaryController extends Controller
{
    public function field(ItemList $itemList, String $field)
    {
        return $itemList->$field ?? 'not found';
    }
}
