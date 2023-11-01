<?php


namespace App\Services\DashboardServices;


use App\Models\Admin;

class AdminService
{
    public function Update( $admin,$request)
    {
        $attributes = $request->validated();

        $attributes['password'] = $attributes['phone'];

        $admin->update($attributes);
  }

    public function store($request)
    {
        $attributes = $request->validated();

        $attributes['password'] = $attributes['phone'];
        Admin::create($attributes);

    }
}
