<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;

class BookingHistoryFormRequest extends FormRequest
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
            'patientName' => [
                'required',
                'string',
                'max:200'
            ],
            'patientEmail' => [
                'required',
                'string',
                'max:200'
            ],
            'patientPhone' => [
                'required',
                'regex:/(01)[0-9]{8}/',
                'max:200'
            ],
            'patientGender' => [
                'required',
                'string',
            ],
            'doctorName' => [
                'required',
                'string',
                
            ],
            'specialist' => [
                'required',
            ],
            'bookingDate' => [
                'string',
            ],
            'bookingTime' => [
                'string',
            ],

            'venue' => [
                'string',
            ],
            
        ];

        return $rules;
    }
}
