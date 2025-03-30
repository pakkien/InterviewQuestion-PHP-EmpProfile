<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced']),
            'phone_no' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'date_of_birth' => $this->faker->dateTimeThisDecade(),
            'nationality' => $this->faker->country(),
            'hire_date' => $this->faker->dateTimeThisDecade(),
            'department' => $this->faker->randomElement(['HR', 'Finance', 'IT']),


        ];
    }
}
