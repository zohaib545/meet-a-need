<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;
use App\University;

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
            'address' => 'required'
        ]);
        $location = Location::create($request->input());
        if($location->type == 'university'){
            $university = new University();
            $university->location_id = $location->id;
            $university->save();
            return redirect("admin/university/$location->slug/edit");
        }
    }

    public function delete(Request $request)
    {
        Location::find($request->input('id'))->delete();
        return redirect()->back();
    }
}
