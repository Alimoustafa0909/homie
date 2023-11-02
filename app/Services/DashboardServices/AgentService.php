<?php


namespace App\Services\DashboardServices;


use App\Models\Admin;
use App\Models\Agent;
use App\Models\User;

class AgentService
{
    public function Update( $agent, $request)
    {
        $attributes = $request->validated();

        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'agents');
        $attributes['password'] = $attributes['phone'];

        $agent->update($attributes);
  }

    public function store( $request)
    {
        $attributes = $request->validated();
        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'agents');
        $attributes['password'] = $attributes['phone'];
        Agent::create($attributes);

    }
}
