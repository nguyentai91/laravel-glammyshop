<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestRequest extends Request
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
            'name'          => 'required|unique:product,product_name',
            'cate_id'       => 'required',
            'brand_id'      => 'required',
            'qty'           => 'required',
            'price'         => 'required',
            'discount'      => 'required',
            'description'   => 'required'
        ];
    }
}