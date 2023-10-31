<?php


namespace App\Services\DashboardServices;


use App\Models\Admin;

class AdminService
{
    public function Update( $admin,array $attributes)
    {
        $attributes['password'] = $attributes['phone'];

        $admin->update($attributes);
  }

    public function store(array $attributes)
    {
        $attributes['password'] = $attributes['phone'];
        Admin::create($attributes);

    }
}
