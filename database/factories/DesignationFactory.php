<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $designations = ['CEO', 'Managing Director', 'Laravel Developer', 'WordPress Developer', 'Graphic Designer', 'Digital Marketer'];

        return [
            'designation_name'  => fake()->unique()->randomElement($designations),
            'parent_id'         => null,
        ];
    }
}
