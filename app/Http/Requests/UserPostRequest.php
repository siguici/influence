<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserPostRequest extends FormRequest
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
            'name' => ['sometimes', 'required'],
            'firstname' => ['sometimes', 'required'],
            'lastname' => ['sometimes','required'],
            'country' => ['sometimes','required'],
            'city' => ['sometimes','required'],
            'sector' => ['sometimes','required'],
            'social_media' => ['sometimes','required'],
            'category' => ['sometimes','required'],
            'biography' => ['sometimes','required'],
            'email' => ['required', 'email', Rule::unique(User::class)],
            'password' => ['required', 'min:4'],
            'password' => ['required'],
            'role' => ['required'],
        ];
    }
}
