<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Contact;
use App\Http\Requests\ContactRequest;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function contact(ContactRequest $request)
    {
        Mail::to($request->get('email'))->send(new Contact($request));

        return redirect()->to('/#contact')->with('contact_success', true);
    }
}
