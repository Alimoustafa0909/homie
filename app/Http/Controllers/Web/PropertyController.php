<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Services\WebServices\PropertyService;
class PropertyController extends Controller
{
    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    public function index()
    {
        $featuresEnum = ['air_conditioning', 'parking', 'lift', 'Bedding', 'Balcony', 'pool', 'cable_tv', 'dish_washer', 'internet', 'toaster'];
        return view('web.property', compact('featuresEnum'));
    }

//    Add Property
    public function store(PropertyRequest $request)
    {
        $this->propertyService->addProperty($request);
        return redirect()->route('property_index')->with('message', 'The Property has been Added Successfully');
    }
}
