<?php

namespace App\Http\Controllers\dashboard;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::paginate(3);
        return view('dashboard.contact.index',compact('messages'));
    }


    public function show(Contact $contact)
    {
        return view('dashboard.contact.show',compact('contact'));
    }

    public function destroy(Contact $message)
    {
        $message->delete();
        return redirect()->route('dashboard.contact.index')->with('success_message','User message has been deleted successfully');
    }
}
