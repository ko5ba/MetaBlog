<?php

namespace App\Http\Requests\Authorization;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Rules\Password::default()]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите имя',
            'email.required' => 'Введите почту',
            'email.email' => 'Неверный формат почты',
            'email.unique' => 'Данная почта уже используется',
            'password.required' => 'Введите пароль',
            'password.confirmation' => 'Повторите пароль',
            'password.min' => 'Минимальная длинна пароля должна составть 8 символов',
            'password.regex' => 'Ваш пароль должен содержать: минимум 1 цифру, 1 символ в верхнем регистре, 1 специальный символ'
        ];
    }
}
