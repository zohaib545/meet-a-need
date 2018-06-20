<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('created_at', 'desc')->limit(15)->with('images')->get();
        $popularLocations = Location::orderBy('views', 'desc')->limit(15)->with('images')->get();
        return view('frontend.pages.home')->with(['locations' => $locations, 'popularLocations' => $popularLocations]);
    }

    public function infobox(Request $request)
    {
        $location = Location::where('place_id', $request->input('place_id'))->first();
        $name = $request->input('name');
        $address = $request->input('address');
        $photo = $request->input('photo');
        $place_id = $request->input('place_id');
        $phone = $request->input('phone');
        $rating = $request->input('rating');
        $website = $request->input('website');
        return view('frontend.ajax.infobox')->with(['location' => $location, 'name' => $name, 'address' => $address, 'photo' => $photo, 'place_id' => $place_id, 'phone' => $phone, 'rating' => $rating, 'website' => $website]);
    }

    public function location(Request $request)
    {
        $location = Location::where('id', $request->input('location_id'))->with('images')->first();
        return view('frontend.ajax.map_results_detail')->with(['location' => $location]);
    }

    public function location_detail($place_id)
    {
        $location = Location::where('place_id', $place_id)->first();
        if($location){
            $location->views = $location->views + 1;
            $location->save();
            $location->detail = $location->detail;
        }
        $client = new \GuzzleHttp\Client();
        $res = $client->get("https://maps.googleapis.com/maps/api/place/details/json?placeid=$place_id&key=AIzaSyC36TsKE1EwXWhh1exmqnRz4ybKVlQ45a0");
        $place = json_decode($res->getBody()->getContents())->result;
        $photos = [];
        if(isset($place->photos)){
            foreach($place->photos as $photo){
                $res = $client->get("https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo->photo_reference&key=AIzaSyC36TsKE1EwXWhh1exmqnRz4ybKVlQ45a0");
                $image = base64_encode($res->getBody()->getContents());
                array_push($photos, $image);
            }
        }
        return view('frontend.pages.location_detail')->with(['location' => $location, 'place_id' => $place_id, 'place' => $place, 'photos' => $photos]);
    }
}
