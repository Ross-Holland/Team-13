<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCarousel;

class HomeCarouselController extends Controller
{
    function welcome()
    {
        $image= HomeCarousel::all();
        return view('welcome',['images'=>$image]);
    }
}