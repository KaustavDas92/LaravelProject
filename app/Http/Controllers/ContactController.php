<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function show()
    {
        return view('contact');
    }
    function store()
    {
        /*\request()->validate(['email'=>'required|email']);
        Mail::raw('It Works',function ($message)
        {
            $message->to(\request('email'))->subject('Hello There');
        });*/
        //$email=\request('email');

        Mail::to(\request('email'))->send(new Contact());
        return redirect("/contact")->with('message','Email sent');
    }
}
