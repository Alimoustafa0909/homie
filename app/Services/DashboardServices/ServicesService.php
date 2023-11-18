<?php


namespace App\Services\DashboardServices;


use App\Models\Admin;
use App\Models\Service;
use App\Models\User;

class ServicesService
{
    public function Update( $service, $request)
    {
        $attributes = $request->validated();

        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'services');

        $service->update($attributes);
  }

    public function store( $request)
    {
        $attributes = $request->validated();
        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'services');
        Service::create($attributes);

    }
}
