<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.pages.profile.index');
    }

    public function update(Request $request)
    {
        $admin = \Auth::guard('admin')->user();
        $admin->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = date('His') . $filename;
            $destinationPath = public_path() . '/images/uploads';
            $file->move($destinationPath, $picture);
            $filePath = url('/images/uploads') . '/' . $picture;
            $admin->profile_picture = $filePath;
        }
        $admin->save();
        return redirect()->back();
    }

    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        $admin = \Auth::guard('admin')->user();
        $password = bcrypt($request->input('password'));
        $admin->password = $password;
        $admin->save();
        return redirect()->back();
    }

    public function login_index()
    {
        return view('admin.pages.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $admin = Admin::where('email', '=', $request->input('email'))->first();
        if ($admin != null) {
            if (Hash::check($request->input('password'), $admin->password)) {
                \Auth::guard('admin')->login($admin);
                return redirect('admin');
            } else {
                return redirect()->back()->withErrors('Email and Password Mismatch', 'login');
            }
        } else {
            return redirect()->back()->withErrors(['admin Not found'], 'login');
        }

    }

    public function request_index()
    {
        return view('admin.pages.request_password');
    }

    public function reset_index()
    {
        return view('admin.pages.reset_password');
    }

    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/login');
    }
}
