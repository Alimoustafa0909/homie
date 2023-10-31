<?php

namespace App\Http\Controllers\Web;
use App\Http\Requests\Dashboard\ContactRequest;
use App\Services\WebServices\ContactService;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    public function index()
    {
        $configData = Config('website');
        return view('web.contact-us',compact('configData'));
    }

    public function store(ContactRequest $request)
    {
        $attributes = $request->validated();

        $this->contactService->store($attributes);

        return redirect()->route('contact.index')->with('message','Sent! we will get back to you as soon as possible');

    }
}
