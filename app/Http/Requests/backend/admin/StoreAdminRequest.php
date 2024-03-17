<?php

namespace App\Http\Requests\backend\admin;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:255', 'unique:admins'],
            'phone' => ['required', 'string', 'max:20', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ar_first_name' => ['required', 'string', 'max:256', 'min:3'],
            'en_first_name' => ['required', 'string', 'max:256', 'min:3'],
            'ar_last_name' => ['required', 'string', 'max:256', 'min:3'],
            'en_last_name' => ['required', 'string', 'max:256', 'min:3'],
            'en_type' => ['string', 'max:50', 'in:admin,superAdmin'],
            'ar_type' => ['string', 'max:50', 'in:admin,superAdmin'],
            'status' => ['nullable', 'boolean'],     
            'en_gender' => ['required', 'string'],   
            'ar_type' => ['required', 'in:مسؤل,مسؤل عام'],
        ];
    }
}
