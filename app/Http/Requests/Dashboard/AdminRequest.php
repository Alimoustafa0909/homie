<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        $adminId = $this->route('admin');
        $rules = [
            'name' => ['required'],
        ];

        // Check the function being called
        if ($this->route()->getActionMethod() === 'store') {
            // Rules for the 'store' function
            $rules['email'] = ['required' , 'unique:admins','max:255'];
            $rules['phone'] = ['required' , 'unique:admins','max:15'];
        } elseif ($this->route()->getActionMethod() === 'update') {
            // Rules for the 'update' function
            $rules['email'] = ['required' , 'unique:admins,email,' . $adminId->id,'email','max:255'];
            $rules['phone'] =['required' , 'unique:admins,phone,'. $adminId->id,'max:15'];
        }

        return $rules;
    }
}
