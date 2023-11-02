<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\PropertyRequest;
use App\Models\Comment;
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


//    Add Property
    public function store(PropertyRequest $request)
    {
        $this->propertyService->addProperty($request);
        return redirect()->route('property.create')->with('message', 'The Property has been Added Successfully');
    }

    public function show(Property $property)
    {
        $features = explode(',', $property->features);

        $latest = Property::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('web.property.show', compact('property', 'features', 'latest'));

    }

    public function myProperty()
    {
        $properties = Property::all();
        return view('web.property.my-properties', compact('properties'));
    }
}
