<?php

namespace App\Services\WebServices;
use App\Models\Contact;

class ContactService
{

    public function store(array $attributes)
    {
        Contact::create($attributes);

    }
}
