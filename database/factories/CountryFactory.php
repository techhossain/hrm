<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $countries = Country::getAllCountries();
        // $countries = Country::getCountries();


        return [
            // 'country_name' => fake()->unique()->randomElement($countries),
            // 'country_code' => '',
            // 'flag_image' => null,
        ];
    }
}
