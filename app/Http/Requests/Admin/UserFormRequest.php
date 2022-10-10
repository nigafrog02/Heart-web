<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
       $rules= [

            'gender' => [
                'required',
                'string',
                'max:200'
            ],

            'name' => [
                'required',
                'regex:/^[a-zA-Z\s]*$/',
                'max:200'
            ],

            'phone' => [
                'required',
                'regex:/(01)[0-9]{8}/',
                'max:200'
            ],

            'email' => [
                'required',
                'string',
                'max:200'
            ],

            'isban' => [
                'required',
               
            ], 
            
            'role_as' => [
                'required',
               
            ],

            

       ];

       return $rules;
    }
}
