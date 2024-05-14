<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('hello@andorraconnect.com')->send(new ContactUs(
            $request->name,
            $request->lastName,
            $request->email,
            $request->phone,
            $request->message
        ));

        return redirect()->back();
    }
}
