<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeterinarianStore extends FormRequest
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
            'user_id'=>'required | integer |unique:App\Models\Veterinarian,user_id|unique:App\Models\Trainer,user_id |unique:App\Models\Elevage,user_id',
            'experience'=>'required ',
            'clinic_name'=>'required | max:100 |min:3 |unique:App\Models\Veterinarian,clinic_name|unique:App\Models\Trainer,elevage_name|unique:App\Models\Elevage,elevage_name',
            'speciality'=>'required | string',
            'address'=>'required |string| max:150 | min:10',
            'phone'=>'required|regex:/^0[5-7][0-9]{8}$/',
            'mobility'=>'required',
            'city'=>'required|string|min:4|max:30',
        ];
    }
}
