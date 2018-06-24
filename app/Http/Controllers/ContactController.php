<?php

namespace App\Http\Controllers;
use App\Mail\ContactMessage;
use Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send_mail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        try{
            Mail::to('hamzaamjad06@gmail.com')->send(new ContactMessage($name, $subject, $message, $email));
        }
        catch(\Exception $e)
        {
            dd($e);
        }
        return redirect()->back();
    }
}
