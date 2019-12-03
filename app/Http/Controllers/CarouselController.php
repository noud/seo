<?php

namespace App\Http\Controllers;

use App\Models\Carousel;

class CarouselController extends Controller
{
    public function field(Carousel $carousel, String $field)
    {
        return $carousel->$field ?? 'not found';
    }
}
