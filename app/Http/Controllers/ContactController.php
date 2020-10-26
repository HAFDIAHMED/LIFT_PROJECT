<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Jobs\ContactJob;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact-us");
    }

    public function store(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "phone" => "required",
            "location" => "required",
            "email" => "required"
        ]);

        $contact = Contact::create($request->only(["first_name", "last_name", "email", "location", "phone"]));
        dispatch(new ContactJob($contact));

        return back()->with("success", "Votre demande a été envoyée");
    }
}
