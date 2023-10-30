<?php

namespace App\Http\Controllers\Web;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('web.contact-us');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'email' => ['required' ],
            'message' => ['required' ],
        ]);

        Contact::create($attributes);

        return redirect()->route('contact.index')->with('message','Sent! we will get back to you as soon as possible');

    }
}
