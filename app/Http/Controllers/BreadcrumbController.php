<?php

namespace App\Http\Controllers;

use App\Models\BreadcrumbList;

class BreadcrumbController extends Controller
{
    public function field(BreadcrumbList $breadcrumbList, String $field)
    {
        return $breadcrumbList->$field ?? 'not found';
    }
}
