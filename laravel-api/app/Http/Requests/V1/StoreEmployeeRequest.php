<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
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
    }

    // protected function prepareForValidation(){
    //     $this->merge([
    //         'employeeName' => $this.name
    //     ]);
    // }
}
