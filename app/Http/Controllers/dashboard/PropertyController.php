<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(3);
        return view('dashboard.property.index', compact('properties'));
    }

    public function show(Property $property)
    {
        return view('dashboard.property.show', compact('property'));
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('dashboard.property.index')->with('success_message', 'The Property has been deleted successfully');
    }


}
