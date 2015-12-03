<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'name'          => 'required',
            'cate_id'       => 'required',
            'brand_id'      => 'required',
            'qty'           => 'required',
            'price'         => 'required',
            'discount'      => 'required',
            'description'   => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'         => 'Please enter product name.',
//            'name.unique'           => 'product name already exists.',
            'cate_id.required'      => 'Please choose category.',
            'brand_id.required'     => 'Please choose brand.',
            'qty.required'          => 'Please enter product quantity.',
            'price.required'        => 'Please enter product price.',
            'discount.required'     => 'Please enter product discount.',
            'description.required'  => 'Please enter product description.'
        ];
    }
}
