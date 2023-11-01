<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Services\WebServices\PropertyService;

class PropertyController extends Controller
{
    protected $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    public function index()
    {
        $properties = Property::paginate(12);
        $properties_buy = Property::where('status', 'For Buy')->paginate(12);
        $properties_sale = Property::where('status', 'For Sale')->paginate(12);
        $properties_rent = Property::where('status', 'For Rent')->paginate(12);

        return view('web.property.index', compact('properties', 'properties_buy', 'properties_sale', 'properties_rent'));
    }


    public function create()
    {
        $featuresEnum = ['air_conditioning', 'parking', 'lift', 'Bedding', 'Balcony', 'pool', 'cable_tv', 'dish_washer', 'internet', 'toaster'];
        return view('web.property.create', compact('featuresEnum'));
    }

    public function show()
    {
        $properties = Property::all();
        return view('web.property.show',compact('properties'));
    }

//    Add Property
    public function store(PropertyRequest $request)
    {
        $this->propertyService->addProperty($request);
        return redirect()->route('property_create')->with('message', 'The Property has been Added Successfully');
    }


}
