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
         $departments = ['IT','HR','Finance','Logistics','Procurement','Legal','Admin'];
        $positions   = ['Engineer','Manager','Officer','Analyst','Assistant'];

        return [
            'first_name' => $this->faker->firstName(),
            'last_name'  => $this->faker->lastName(),
            'email'      => $this->faker->unique()->safeEmail(),
            'phone'      => $this->faker->optional()->phoneNumber(),
            'department' => $this->faker->randomElement($departments),
            'position'   => $this->faker->randomElement($positions),
            'hire_date'  => $this->faker->dateTimeBetween('-5 years', 'now'),
            'salary'     => $this->faker->numberBetween(300, 5000) * 100, // 30,000–500,000
            'status'     => $this->faker->boolean(80) ? 'active' : 'inactive',
        ];
    }
}
