<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
       $services = Service::paginate(6);
      $random_services =  Service::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
       return view('web.services',compact('services','random_services'));
    }
}
