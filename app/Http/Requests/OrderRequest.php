<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderRequest extends Request
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
        return [
            'country'           => 'required',
            'sity'              => 'required',
            'province'          => 'required',
            'postcode'          => 'required',
            'street1'           => 'required',
            'firstname'         => 'required',
            'lastname'          => 'required',
            'phone'             => 'required',
            'email'             => 'required',
            'shipping_method'   => 'required',
            'payment'           => 'required',
            'card_number'       => 'required'
        ];
    }

    public function messages()
    {
        return [
            'country.required'          => 'Please choose country.',
            'sity.required'             => 'Please enter sity.',
            'province.required'         => 'Please enter province.',
            'postcode.required'         => 'Please enter postcode.',
            'street1.required'          => 'Please enter street1.',
            'firstname.required'        => 'Please enter first name.',
            'lastname.required'         => 'Please enter last name.',
            'phone.required'            => 'Please enter  phone.',
            'email.required'            => 'Please enter email.',
            'shipping_method.required'  => 'Please choose shipping .',
            'payment.required'          => 'Please choose payment.',
            'card_number.required'      => 'Please enter card number.',
        ];
    }
}
