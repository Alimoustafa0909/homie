<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Services\DashboardServices\AdminService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        $admins = Admin::paginate(3);
        return view('dashboard.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function show(Admin $admin)
    {
        return view('dashboard.admins.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        return view('dashboard.admins.edit', compact('admin'));
    }

    public function store(AdminRequest $request)
    {
        $attributes = $request->validated();

        $this->adminService->store($attributes);

        return redirect()->route('dashboard.admins.index')->with('success_message', 'The new admin has been added successfully');

    }

    public function update(AdminRequest $request, Admin $admin)
    {
        $attributes = $request->validated();
        $this->adminService->Update($admin, $attributes);

        return redirect()->route('dashboard.admins.index')->with('success_message', 'The admin has been updated successfully');

    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('dashboard.admins.index')->with('success_message', 'The admin has been deleted successfully');
    }

}
