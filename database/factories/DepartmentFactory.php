<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = ['HR', 'Accounts', 'Sales', 'IT', 'Marketeing'];

        return [
            'department_name'  => fake()->unique()->randomElement($departments),
            'parent_id'         => null,
        ];
    }
}
