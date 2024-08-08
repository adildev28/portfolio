<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        $roles = ['visitor', 'veterinarian', 'trainer', 'elevage'];
        return [
            'name'=>'required | string |max:30',
            'role' => 'required|string' ,// Validate the role
            'email'=>'required | email',
            'password'=>'required | min:8 | max:24 ',
            'profile_id'=>'required |unique:App\Models\User,profile_id'
        ];
    }
}
