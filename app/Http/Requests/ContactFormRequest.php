<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|max:225',
            'email' => 'required|unique:contacts|max:225',
            'phone' => 'nullable',
            'address' => 'nullable',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.unique' => 'This Email Alrady Taken!',
        ];
    }
}
