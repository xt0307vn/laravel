<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AuthManagerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            // 'email.required' => ":attribute không được để trống",
            // 'name.required' => ":attribute không được để trống",
            'exists' => ":attribute không chính xác",
            'required' => ":attribute không được để trống",
        ];
    }

    public function attributes() {
        return [
            "email" => "EMAIL",
            "name" => "Tên",
            "password" => "MẬT KHẨU",
        ];
    }
}
