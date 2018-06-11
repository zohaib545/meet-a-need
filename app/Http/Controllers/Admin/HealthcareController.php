<?php

namespace App\Http\Controllers\Admin;

use App\Healthcare;
use App\Location;
use App\HealthcareFacilityDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthcareController extends Controller
{
    public function index()
    {
        $healthcares = Healthcare::with('location')->get();
        return view('admin.pages.healthcare.index')->with(['healthcares' => $healthcares]);
    }

    public function edit($location_slug)
    {
        $location = Location::where(['slug' => $location_slug, 'type' => 'healthcare'])->first();
        if ($location == null) {
            abort(404);
        } else {
            $healthcare = $location->detail;
            if ($healthcare == null) {
                abort(404);
            } else {
                $healthcare_facility_details = $healthcare->facility_details;
                return view('admin.pages.healthcare.edit')->with(['location' => $location, 'healthcare' => $healthcare, 'healthcare_facility_details' => $healthcare_facility_details]);
            }
        }
    }

    public function update(Request $request)
    {
        $healthcare = Healthcare::find($request->input('id'));
        if ($healthcare == null) {
            abort(400);
        } else {
            $location = $healthcare->location;
            if ($location == null) {
                abort(400);
            } else {
                $location->name = $request->input('name');
                $location->address = $request->input('address');
                $location->description = $request->input('description');
                $location->save();
                $healthcare->website = $request->input('website');
                $healthcare->phone = $request->input('phone');
                $healthcare->email = $request->input('email');
                $healthcare->facility_type = $request->input('facility_type');
                $healthcare->save();

                foreach ($healthcare->facility_details as $facility_detail) {
                    $facility_detail->delete();
                }
                if ($request->input('department_detail') != null) {
                    foreach ($request->input('department_detail') as $facility_detail) {
                        $healthcare_facility_detail = new HealthcareFacilityDetail();
                        $healthcare_facility_detail->name = $facility_detail['name'];
                        $healthcare_facility_detail->phone = $facility_detail['phone'];
                        $healthcare_facility_detail->available_time = $facility_detail['available_time'];
                        $healthcare_facility_detail->healthcare_id = $healthcare->id;
                        $healthcare_facility_detail->save();
                    }
                }
            }
            return redirect('admin/healthcare');
        }
    }
}
