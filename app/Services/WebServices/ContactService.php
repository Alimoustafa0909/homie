<?php

namespace App\Services\WebServices;
use App\Models\Contact;

class ContactService
{

    public function store($request)
    {
        $attributes = $request->validated();
        Contact::create($attributes);
    }
}
