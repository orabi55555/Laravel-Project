<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'gender' => 'sometimes|required|in:male,female',
            'date_of_birth' => 'sometimes|required|date|before_or_equal:today',
            'avatar_image' => 'nullable|image|max:2048',
            'mobile_number' => 'sometimes|required|string|max:20',
            'national_id' => 'sometimes|required|string|max:20' ,
            'password'=>'sometimes'
        ];
    }
}
