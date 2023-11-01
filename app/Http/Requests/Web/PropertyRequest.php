<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'location' => 'required',
            'type' => 'required',
            'area' => 'required',
            'status' => 'required',
            'bedroom' => 'required|integer',
            'bathroom' => 'required|integer',
            'garage' => 'required|integer',
            'features' => 'nullable|array',
            'image'=>'nullable'
        ];
    }
}
