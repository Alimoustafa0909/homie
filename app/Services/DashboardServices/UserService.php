<?php


namespace App\Services\DashboardServices;


use App\Models\Admin;
use App\Models\User;

class UserService
{
    public function Update( $user, $request)
    {
        $attributes = $request->validated();

        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'users');
        $attributes['password'] = $attributes['phone'];

        $user->update($attributes);
  }

    public function store( $request)
    {
        $attributes = $request->validated();
        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'users');
        $attributes['password'] = $attributes['phone'];
        User::create($attributes);

    }
}
