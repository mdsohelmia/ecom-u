<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthValidationRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }


    /**
     * @return string[]
     */
    public function messages():array
    {
        return [
            'email.required' => 'email dite hobe',
            'email.email' => 'email validae email de',
        ];
    }
}
