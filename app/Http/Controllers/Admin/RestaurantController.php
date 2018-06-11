<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Location;
use App\Restaurant;
use App\RestaurantDetail;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with('location')->get();
        return view('admin.pages.restaurant.index') ->with(['restaurants' => $restaurants]);
    }

    public function edit($location_slug)
    {
        $location = Location::where(['slug' => $location_slug, 'type' => 'restaurant'])->first();
        if ($location == null) {
            abort(404);
        } else {
            $restaurant = $location->detail;
            if ($restaurant == null) {
                abort(404);
            } else {
                $restaurant_details = $restaurant->restaurant_details;
                return view('admin.pages.restaurant.edit')->with(['location' => $location, 'restaurant' => $restaurant, 'restaurant_details' => $restaurant_details]);
            }
        }
    }

    public function update(Request $request)
    {
        $restaurant = Restaurant::find($request->input('id'));
        if ($restaurant == null) {
            abort(400);
        } else {
            $location = $restaurant->location;
            if ($location == null) {
                abort(400);
            } else {
                $location->name = $request->input('name');
                $location->address = $request->input('address');
                $location->description = $request->input('description');
                $location->save();
                $restaurant->website = $request->input('website');
                $restaurant->phone = $request->input('phone');
                $restaurant->email = $request->input('email');
                $restaurant->pricing = $request->input('pricing');
                $restaurant->save();

                foreach ($restaurant->restaurant_details as $restaurant_detail) {
                    $restaurant_detail->delete();
                }
                if ($request->input('restaurant_detail') != null) {
                    foreach ($request->input('restaurant_detail') as $request_restaurant_detail) {
                        $restaurant_detail = new RestaurantDetail();
                        $restaurant_detail->cuisine = $request_restaurant_detail['cuisine'];
                        $restaurant_detail->restaurant_id = $restaurant->id;
                        $restaurant_detail->save();
                    }
                }
            }
            return redirect('admin/restaurant');
        }
    }
}
