<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'storage' => 'required|numeric',
            'price' => 'nullable'
        ];
    }


    public function messages(): array
    {
        return [
            'brand.required' => 'A Brand NAME Field is required',
            'brand.max' => 'A dsada',
        ];
    }
}
