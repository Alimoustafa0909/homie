<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
        $agentId = $this->route('agent');
        $rules = [
            'name' => ['required'],
            'image' =>['nullable'],
            'title' =>['required'],
            'work_experience' =>['required'],
            'biography' =>['required'],
        ];
        // Check the function being called
        if ($this->route()->getActionMethod() === 'store') {
            // Rules for the 'store' function
            $rules['email'] = ['required' , 'unique:agents','max:255'];
            $rules['phone'] = ['required' , 'unique:agents','max:15'];
        } elseif ($this->route()->getActionMethod() === 'update') {
            // Rules for the 'update' function
            $rules['email'] = ['required' , 'unique:agents,email,' . $agentId->id,'email','max:255'];
            $rules['phone'] =['required' , 'unique:agents,phone,'. $agentId->id,'max:15'];
        }

        return $rules;
    }
}
