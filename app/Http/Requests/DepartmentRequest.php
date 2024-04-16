<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
//        update validation ma afno id bahek aru department ko id check garne
        $id = $this->route('department')->id ?? null;
//        $id = isset($this->route('department')->id) ? $this->route('department')->id : null;
        return [
//            'name' => 'required|string|max:255|unique:departments,name,' . $id,
            'name' => ['required', 'string', 'max:255', 'unique:departments,name,' . $id]
        ];
    }
}
