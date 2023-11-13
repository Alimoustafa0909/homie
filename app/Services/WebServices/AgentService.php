<?php

namespace App\Services\WebServices;

use App\Http\Requests\Web\AgentContactRequest;
use App\Models\AgentContact;

class AgentService
{

    public function storeContact(AgentContactRequest $request, $id)
    {
        $attributes = $request->validated();
        $attributes['agent_id'] = $id;
        AgentContact::create($attributes);
    }

}
