<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactPost(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'city' => 'required', 'zip' => 'required', 'matter' => 'required']);
        Contact::create($request->all());

        return back()->with('success', 'Thank you for contacting me!');
    }
}

