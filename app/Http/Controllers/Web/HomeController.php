<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties_sale = Property::where('status', 'For Sale')->get();
        $properties_rent = Property::where('status', 'For Rent')->get();
        $agents = Agent::all();
        return view('web.home', compact('properties_sale', 'properties_rent', 'agents'));
    }
}
