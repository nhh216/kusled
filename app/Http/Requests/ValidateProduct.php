<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProduct extends FormRequest
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
            'name' => 'required|unique:products|max:255',
            'category_id' => 'required',
            'code' => 'required|unique:products|max:255',
            'price' => 'required|numeric|digits_between:1,11',
            'discount' => 'integer|between:0,100',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
