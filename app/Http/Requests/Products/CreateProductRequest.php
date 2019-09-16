<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'title'=> 'required',
            'shortdescript'=> 'required',
            'longdescript'=> 'required',
            'image' => 'required|image',
            'supplier' => 'required',
            'tag' => 'required',
            'subcategory' => 'required',
            'productnumber' => 'required',
        ];
    }
}
