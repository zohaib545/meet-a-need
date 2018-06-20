<?php

namespace App\Http\Controllers;

use App\Location;

class WelcomeController extends Controller
{
    public function index()
    {
        $popularLocations = Location::orderBy('views', 'desc')->limit(15)->with('images')->get();
        return view('frontend.pages.welcome')->with(['popularLocations' => $popularLocations]);
    }
}
