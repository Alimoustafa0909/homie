<?php

namespace App\Services\WebServices;

use App\Http\Requests\Web\PropertyRequest;
use App\Models\Property;

class PropertyService
{
    public function addProperty(PropertyRequest $request)
    {
        $attributes = $request->validated();

        // Convert features array to a string separated by commas
        if (isset($attributes['features'])) {
            $attributes['features'] = implode(',', $attributes['features']);
        }
        // Upload the image and set the image attribute

        if($request->file('image'))
           $attributes['image'] = uploadImage($request->file('image'), 'property');

        Property::create($attributes);
    }

    public function updateProperty(PropertyRequest $request, Property $property)
    {
        $attributes = $request->validated();

        if ($request->file('image')) {
            $attributes['image'] = uploadImage($request->file('image'), 'property');
        }

        $property->update($attributes);
    }
}
