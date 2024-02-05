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
        Mail::to('joanmacat@gmail.com')->send(new ContactUs(
            $request->name,
            $request->lastName,
            $request->email,
            $request->phone,
            $request->message
        ));

        notify()->success('Welcome to Laravel Notify ⚡️');
        return redirect()->back();
    }
}
