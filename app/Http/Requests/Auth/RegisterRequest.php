<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'string|required|min:3',
            'email' => 'email|required|unique:users',
            'phone' => 'numeric|required|unique:users',
            'date_birth' => 'date|required',
            'password' => 'string|required|min:6|confirmed',
        ];
    }
}
