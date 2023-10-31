<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $userId = $this->route('user');
        $rules = [
            'name' => ['required'],
            'image' =>['nullable']
        ];
        // Check the function being called
        if ($this->route()->getActionMethod() === 'store') {
            // Rules for the 'store' function
            $rules['email'] = ['required' , 'unique:users','max:255'];
            $rules['phone'] = ['required' , 'unique:users','max:15'];
        } elseif ($this->route()->getActionMethod() === 'update') {
            // Rules for the 'update' function
            $rules['email'] = ['required' , 'unique:users,email,' . $userId->id,'email','max:255'];
            $rules['phone'] =['required' , 'unique:users,phone,'. $userId->id,'max:15'];
        }

        return $rules;
    }
}
