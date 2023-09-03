<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
          'fname' => 'required',
          'lname' => 'required',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|confirmed|min:8',
          'birthday' => 'required',
          'phone' => 'required|numeric|digits:10|unique:users,phone'
        ];
    }
}
