<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use App\Models\contact\contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        contact::create($data);

        Mail::to('OntheGorelax@gmail.com')->send(new ContactUs($data));  //masesend sa email na to through mailtrap.io

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

