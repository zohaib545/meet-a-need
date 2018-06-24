<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use Hash;
use Illuminate\Http\Request;
use Mail;

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

    public function request_password(Request $request)
    {
        $admin = Admin::where('email', $request->input('email'))->first();
        if ($admin == null) {
            return redirect()->back()->withErrors(['Admin Not found'], 'login');
        } else {
            $admin->password_reset_token = md5(uniqid());
            $admin->save();
            $link = url("reset-password?token=$admin->password_reset_token");
            try {
                Mail::to($request->input('email'))->send(new ForgotPassword($admin->name, $link));
            } catch (\Exception $e) {
                dd($e);
            }
            return redirect('password-request-confirmation');
        }
    }

    public function reset_index(Request $request)
    {
        if ($request->input('token') == null) {
            abort(404);
        } else {
            $admin = Admin::where('password_reset_token', $request->input('token'))->first();
            if ($admin == null) {
                abort(404);
            } else {
                return view('admin.pages.reset_password')->with(['id' => $admin->id]);
            }
        }
    }

    public function reset_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'id' => 'required'
        ]);
        $admin = Admin::find($request->input('id'));
        $admin->password = bcrypt($request->input('password'));
        $admin->save();
        return redirect('password-reset-confirmation');

    }

    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function reset_confirmation()
    {
        return view('frontend.pages.password_reset_confirmation');
    }

    public function request_confirmation()
    {
        return view('frontend.pages.password_request_confirmation');
    }
}
