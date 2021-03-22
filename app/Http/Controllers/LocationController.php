<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function get_location()
    {
        return view("pages.locations.map1");
    }
}
