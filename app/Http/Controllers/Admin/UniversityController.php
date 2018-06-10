<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Location;
use App\University;
use App\UniversityAdmissionDetail;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::with('location')->get();
        return view('admin.pages.university.index')->with(['universities' => $universities]);
    }

    public function edit($location_slug)
    {
        $location = Location::where('slug', $location_slug)->first();
        if ($location == null || $location->type != 'university') {
            abort('404');
        } else {
            $university = $location->detail;
            $admission_details = $university->admission_details;
            return view('admin.pages.university.edit')->with(['location' => $location, 'university' => $university, 'admission_details' => $admission_details]);
        }
    }

    public function update(Request $request)
    {
        $university = University::find($request->input('id'));
        if ($university == null) {
            abort(400);
        } else {
            $location = $university->location;
            $location->name = $request->input('name');
            $location->address = $request->input('address');
            $location->description = $request->input('description');
            $location->save();
            $university->website = $request->input('website');
            $university->email = $request->input('email');
            $university->sector = $request->input('sector');
            $university->phone = $request->input('phone');
            $university->save();
            foreach ($university->admission_details as $admission_detail) {
                $admission_detail->delete();
            }
            if ($request->input('admission_detail') != null) {
                foreach ($request->input('admission_detail') as $admission_detail) {
                    $university_admission_detail = new UniversityAdmissionDetail();
                    $university_admission_detail->course_name = $admission_detail['course_name'];
                    $university_admission_detail->course_level = $admission_detail['course_level'];
                    $university_admission_detail->date = $admission_detail['date'];
                    $university_admission_detail->eligibility = $admission_detail['eligibility'];
                    $university_admission_detail->university_id = $university->id;
                    $university_admission_detail->save();
                }
            }
            return redirect('admin/university');
        }
    }
}
