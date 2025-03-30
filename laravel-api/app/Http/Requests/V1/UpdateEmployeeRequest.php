<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
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
        $method = $this->method();

        if($method == 'PUT'){
            return [
                'name' => ['required'],
                'gender' => ['required', Rule::in(['M','F'])],
                'marital_status' => ['required', Rule::in(['single', 'married', 'divorced'])],
                'phone_no' => ['required'],
                'email' => ['required', 'email'],
                'address' => ['required'],
                'date_of_birth' => ['required'],
                'nationality' => ['required'],
                'hire_date' => ['required'],
                'department' => ['required', Rule::in(['HR', 'Finance', 'IT'])],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'gender' => ['sometimes','required', Rule::in(['M','F'])],
                'marital_status' => ['sometimes','required', Rule::in(['single', 'married', 'divorced'])],
                'phone_no' => ['sometimes','required'],
                'email' => ['sometimes','required', 'email'],
                'address' => ['sometimes','required'],
                'date_of_birth' => ['sometimes','required'],
                'nationality' => ['sometimes','required'],
                'hire_date' => ['sometimes','required'],
                'department' => ['sometimes','required', Rule::in(['HR', 'Finance', 'IT'])],
            ];
        }
    }

}
