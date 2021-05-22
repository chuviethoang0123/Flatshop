<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
       $rules = [
           'name' => 'required',
           'price' => 'required|numeric',
           'quantity' => 'required|numeric',
           'description' => [new Uppercase],

       ];

       if ($this->method() == 'PUT') {
        $rules['quantity'] = [
            'required',
            Rule::unique('products')->ignore($this->product),
        ];
    }
       return $rules;
    }

    public function messages()
    {
        return [
           ' name.required' => 'The name field is required.',
           'price,required' => 'The price field is numeric.',
           'quantity.required' => 'The price field is numeric.',
        ];
    }

   
}
