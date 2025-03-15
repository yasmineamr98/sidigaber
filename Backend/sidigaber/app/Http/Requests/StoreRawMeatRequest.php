<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRawMeatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:raw_meats|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
            'weight' => 'required|numeric|min:0',
            'quality' => 'in:premium,standard,economy',
            'is_available' => 'boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'A raw meat with this name already exists.',
            'price.min' => 'Price must be a positive number.',
            'weight.min' => 'Weight must be a positive number.'
        ];
    }
}
;