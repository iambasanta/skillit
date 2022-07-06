<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', Rule::unique('users')->ignore(Auth::user())],
            'phone' => ['required', 'string', 'max:255'],
            'institute' => ['required', 'string', 'max:255'],
            'faculty' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'password' => ['sometimes', 'string', 'confirmed', 'min:8'],

        ];
    }

    protected function prepareForValidation()
    {
        if ($this->password === null) {
            $this->request->remove('password');
        }
    }
}
