<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone_no' => $this->phone_no,
            'gender' => $this->gender,
            'address' => $this->address,
            'marital_status' => $this->marital_status,
            'date_of_birth' => $this->date_of_birth,
            'nationality' => $this->nationality,
            'hire_date' => $this->hire_date,
            'department' => $this->department,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        
        ];
    }
}
