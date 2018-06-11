<?php

namespace App\Http\Controllers\Admin;

use App\Healthcare;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Location;
use App\Restaurant;
use App\University;

class DashboardController extends Controller
{
    public function index()
    {
        $universities = University::all()->count();
        $healthcare = Healthcare::all()->count();
        $hotels = Hotel::all()->count();
        $restaurants = Restaurant::all()->count();
        $locations = Location::orderBy('created_at', 'desc')->limit(8)->with('images')->get();
        return view('admin.pages.dashboard')->with([
            'universities' => $universities, 'healthcare' => $healthcare, 'hotels' => $hotels, 'restaurants' => $restaurants, 'locations' => $locations,
        ]);
    }
}
