<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Це поле є необхідним для заповнення',
            'name.string' => 'Поле повинне бути рядком',
            'email.required' => 'Це поле є необхідним для заповнення',
            'email.string' => 'Поле повинне бути рядком',
            'email.email' => 'Це поле повинне відповідати формату електронної пошти dog@gmail.com',
            'email.unique' => 'Користувач з таким email вже існує',
        ];
    }
}
