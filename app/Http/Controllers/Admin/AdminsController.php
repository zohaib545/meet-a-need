<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = \App\Admin::all();
        return view('admin.pages.admin.index')->with(['admins' => $admins]);
    }

    public function delete(Request $request)
    {
        \App\Admin::find($request->input('id'))->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $admin = \App\Admin::where('email', $request->input('email'))->first();
        if($admin != null)
            return redirect()->back()->withErrors('Already Exist');
        else {
            $admin = new \App\Admin();
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = bcrypt($request->input('password'));
            $admin->save();
            return redirect()->back();
        }
    }
}
