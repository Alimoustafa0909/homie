<?php


namespace App\Services\DashboardServices;


use App\Models\Admin;
use App\Models\User;

class UserService
{
    public function Update( $user,array $attributes)
    {
        $attributes['password'] = $attributes['phone'];

        $user->update($attributes);
  }

    public function store(array $attributes)
    {
        $attributes['password'] = $attributes['phone'];
        User::create($attributes);

    }
}
