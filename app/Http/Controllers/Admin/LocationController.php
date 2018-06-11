<?php

namespace App\Http\Controllers\Admin;

use App\Healthcare;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Location;
use App\Restaurant;
use App\University;
use App\LocationImage;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return view('admin.pages.location.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'place_id' => 'required|unique:locations',
            'name' => 'required',
            'description' => 'required|max:2000',
            'type' => 'required|in:university,healthcare,hotel,restaurant',
            'address' => 'required',
        ]);
        $location = new Location();
        $location->place_id = $request->input('place_id');
        $location->name = $request->input('name');
        $location->address = $request->input('address');
        $location->type = $request->input('type');
        $location->description = $request->input('description');
        $location->save();
        if($request->images != null){
            foreach($request->images as $image){
                $location_image = new LocationImage();
                $location_image->url = $image;
                $location_image->location_id = $location->id;
                $location_image->save();
            }
        }
        if ($location->type == 'university') {
            $university = new University();
            $university->location_id = $location->id;
            $university->save();
            return redirect("admin/university/$location->slug/edit");
        } else if ($location->type == 'healthcare') {
            $healthcare = new Healthcare();
            $healthcare->location_id = $location->id;
            $healthcare->save();
            return redirect("admin/healthcare/$location->slug/edit");
        } else if ($location->type == 'hotel') {
            $hotel = new Hotel();
            $hotel->location_id = $location->id;
            $hotel->save();
            return redirect("admin/hotel/$location->slug/edit");
        } else if ($location->type == 'restaurant') {
            $restaurant = new Restaurant();
            $restaurant->location_id = $location->id;
            $restaurant->save();
            return redirect("admin/restaurant/$location->slug/edit");
        }
    }

    public function delete(Request $request)
    {
        Location::find($request->input('id'))->delete();
        return redirect()->back();
    }
}
