<?php

namespace App\Http\Requests\backend\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'en_first_name' => ['required', 'string', 'max:256', 'min:3'],
            'ar_first_name' => ['required', 'string', 'max:256', 'min:3'],
            'en_last_name' => ['required', 'string', 'max:256', 'min:3'],
            'ar_last_name' => ['required', 'string', 'max:256', 'min:3'],
            'en_gender' => ['required', 'string'],   
            'ar_gender' => ['required', 'string'],   
            'email' => ['required', 'email', 'max:255', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'phone' => ['required', 'string', 'max:20', 'regex:/^(01)[0125][0-9]{8}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'en_type' => ['required', 'in:admin,superAdmin'],
            'ar_type' => ['required', 'in:مسؤل,مسؤل عام'],
            'status' => ['nullable', 'boolean'],     
        ];
    }
}