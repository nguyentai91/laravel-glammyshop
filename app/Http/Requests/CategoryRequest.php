<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'cate_name'     => 'required',
//            'brand_name'     => 'required',
            'oder'          => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cate_name.required'    => 'Please enter category name.',
//            'brand_name.required'    => 'Please enter brand name.',
            'oder.required'         => 'Please choose oder.'
        ];
    }
}
