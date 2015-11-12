<?php 

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookingRequest extends Request {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'service' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please tell us your name',
            'phone.required'  => 'We need to call you to set up your appointment',
            'service.required' => 'Let us know what service you\'re after'
        ];
    }

}