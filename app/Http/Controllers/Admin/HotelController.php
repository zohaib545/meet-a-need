<?php

namespace App\Http\Controllers\Admin;

use App\Location;
use App\Hotel;
use App\HotelDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('location')->get();
        return view('admin.pages.hotel.index')->with(['hotels' => $hotels]);
    }

    public function edit($location_slug)
    {
        $location = Location::where(['slug' => $location_slug, 'type' => 'hotel'])->first();
        if ($location == null) {
            abort(404);
        } else {
            $hotel = $location->detail;
            if ($hotel == null) {
                abort(404);
            } else {
                $hotel_details = $hotel->hotel_details;
                return view('admin.pages.hotel.edit')->with(['location' => $location, 'hotel' => $hotel, 'hotel_details' => $hotel_details]);
            }
        }
    }

    public function update(Request $request)
    {
        $hotel = Hotel::find($request->input('id'));
        if ($hotel == null) {
            abort(400);
        } else {
            $location = $hotel->location;
            if ($location == null) {
                abort(400);
            } else {
                $location->name = $request->input('name');
                $location->address = $request->input('address');
                $location->description = $request->input('description');
                $location->save();
                $hotel->website = $request->input('website');
                $hotel->phone = $request->input('phone');
                $hotel->email = $request->input('email');
                $hotel->stars = $request->input('stars');
                $hotel->save();

                foreach ($hotel->hotel_details as $hotel_detail) {
                    $hotel_detail->delete();
                }
                if ($request->input('hotel_detail') != null) {
                    foreach ($request->input('hotel_detail') as $request_hotel_detail) {
                        $hotel_detail = new HotelDetail();
                        $hotel_detail->room_type = $request_hotel_detail['room_type'];
                        $hotel_detail->options = $request_hotel_detail['options'];
                        $hotel_detail->price_per_night = $request_hotel_detail['price_per_night'];
                        $hotel_detail->hotel_id = $hotel->id;
                        $hotel_detail->save();
                    }
                }
            }
            return redirect('admin/hotel');
        }
    }
}
