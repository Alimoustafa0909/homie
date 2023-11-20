<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ServiceRequest;
use App\Models\Service;
use App\Services\DashboardServices\ServicesService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceService;

    public function __construct(ServicesService $serviceService)
    {
        $this->serviceService = $serviceService;
    }
    public function index()
    {
        $services = Service::paginate(3);
        return view('dashboard.services.index',compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $this->serviceService->store($request);

        return redirect()->route('dashboard.services.index')->with('success_message','The service has been created successfully');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.edit',compact('service'));
    }

    public function update(ServiceRequest $request,Service $service)
    {

        $this->serviceService->Update($service, $request);

        return redirect()->route('dashboard.services.index')->with('success_message','The service has been Updated successfully');
    }

    public function show(Service $service)
    {
        return view('dashboard.services.show',compact('service'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('dashboard.services.index')->with('success_message','The service has been Deleted successfully');

    }

}
