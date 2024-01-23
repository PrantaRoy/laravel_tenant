<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class TenantRegisterRequest extends FormRequest
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
            'company' => 'required|string|max:191',
            'domain' => 'required|string|max:191|unique:domains',
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'password' => ['required','confirmed', Password::defaults()],
        ];
    }


      public function prepareForValidation()
            {
                $this->merge([
                'domain' => $this->domain . '.' . config('tenancy.central_domains')[1]
                ]);
            }
}
